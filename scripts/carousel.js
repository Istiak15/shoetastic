var index = 0; // Declare the index variable outside the function

function carousel() {
    var slides = document.getElementsByClassName("mySlides");
    var labels = document.getElementsByClassName("myLabels");
    
    // Hide all slides and labels
    for (var i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
        labels[i].style.display = "none";
    }
    
    index++;
    if (index > slides.length) {
        index = 1;
    }
    
    // Display the current slide and label
    slides[index - 1].style.display = "block";
    labels[index - 1].style.display = "block";
    
    // Set a timeout to call the carousel function after 4000 milliseconds
    setTimeout(carousel, 3000);
}

carousel(); // Call the carousel function to start the slideshow



