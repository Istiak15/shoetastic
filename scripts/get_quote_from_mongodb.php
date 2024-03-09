<?php
// get_quote.php

function create_quote_today()
{
    $quotesFilePath = __DIR__ ."/../resources/quotes_mongo.json";
    $quoteTodayFilePath = __DIR__."/../resources/quote_today.txt";

    // Check if quotes.json exists
    if (!file_exists($quotesFilePath)) {
        return "Failed to open quotes.json file.";
    }

    // Read quotes from quotes.json
    $quotes = file_get_contents($quotesFilePath);

    // Check if file_get_contents was successful
    if ($quotes === false) {
        return "Failed to read contents of quotes.json file.";
    }

    // Decode JSON content
    $quotes_data = json_decode($quotes);

    // Check if JSON decoding was successful
    if ($quotes_data === null) {
        return "Failed to decode JSON content in quotes.json.";
    }

    // Open or create quote_today.txt file
    $f = fopen($quoteTodayFilePath, "w");
    if ($f === false) {
        return "Failed to create or open quote_today.txt file.";
    }

    // Write today's date to quote_today.txt
    $date = date("l, F jS");
    $dateWithoutPrefix = substr($date, strpos($date, ',') + 2);
    if (fwrite($f, $dateWithoutPrefix . "\n") === false) {
        fclose($f);
        return "Failed to write date to quote_today.txt file.";
    }

    // Generate random quote
    $quote_number = rand(0, count($quotes_data) - 1);
    $quote_today = "Today's " . $quotes_data[$quote_number]->adjective . " quote, from "
        . $quotes_data[$quote_number]->author . ":\n" . $quotes_data[$quote_number]->text;

    // Write the quote to quote_today.txt
    if (fwrite($f, $quote_today) === false) {
        fclose($f);
        return "Failed to write quote to quote_today.txt file.";
    }
    fclose($f);

    return $quote_today;
}

function get_quote()
{
    $quoteTodayFilePath = __DIR__."/../resources/quote_today.txt";

    if (file_exists($quoteTodayFilePath)) {
        $f = fopen($quoteTodayFilePath, "r");
        if ($f === false) {
            return "Failed to open quote_today.txt file.";
        }
        $date = trim(fgets($f));
        fclose($f);
        if ($date == date("l, F jS")) {
            return file_get_contents($quoteTodayFilePath);
        } else {
            return create_quote_today();
        }
    }

    return create_quote_today();
}

echo get_quote();
?>
