<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoplay Video Slider</title>
    <style>
        /* Styling for the video slider container */
        .slider-container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            overflow: hidden;
        }

        /* Styling for individual video slides */
        .slide {
            display: none;
        }

        /* Styling for the video element */
        video {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="slider-container">
        <!-- Video Slide 1 -->
        <div class="slide">
            <video autoplay loop controls>
                <source src="videos/pexels_videos_2073129 (2160p).mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        
        <!-- Video Slide 2 -->
        <div class="slide">
            <video autoplay loop controls>
                <source src="videos/pexels_videos_2317680 (2160p).mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        
        <!-- Video Slide 3 -->
        <div class="slide">
            <video autoplay loop controls>
                <source src="videos/pexels-cityxcape-10227583 (Original).mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <script>
        // JavaScript to handle autoplay
        const slides = document.querySelectorAll('.slide');
        let currentSlide = 0;

        function showSlide(n) {
            slides[currentSlide].style.display = 'none';
            currentSlide = (n + slides.length) % slides.length;
            slides[currentSlide].style.display = 'block';
        }

        function nextSlide() {
            showSlide(currentSlide + 1);
        }

        // Auto-play the slider
        setInterval(nextSlide, 5000); // Change slide every 5 seconds (adjust as needed)
    </script>
</body>
</html>
