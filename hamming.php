<?php include('includes/header.php'); ?>
<h2 class="page-title">Hamming Code Lesson</h2>

<div class="slide" id="slide1">
    <h2>What is a Hamming Code?</h2>
    <p>Hamming code is a linear code that is useful for error detection up to two immediate bit errors. It is capable of correcting single-bit errors.</p>
</div>

<div class="slide" id="slide2" style="display:none;">
    <h2>History of Hamming Code</h2>
    <ul>
        <li>Hamming code is a technique built by R.W. Hamming to detect errors.</li>
        <li>It applies to data units of any length and uses the relationship between data and redundancy bits.</li>
        <li>He worked on the problem of error-correction methods and developed powerful algorithms called Hamming codes.</li>
        <li>In 1950, he published the Hamming Code, which is widely used today in applications like ECC memory.</li>
    </ul>
</div>

<div class="slide" id="slide3" style="display:none;">
    <h2>Applications of Hamming Code</h2>
    <ul>
        <li>Satellites</li>
        <li>Computer Memory</li>
        <li>Modems</li>
        <li>PlasmaCAM</li>
        <li>Open Connectors</li>
    </ul>
</div>

<div class="slide" id="slide4" style="display:none;">
    <h2>Process of Encoding a Message Using Hamming Code</h2>
    <p>The process used by the sender to encode the message includes the following steps:</p>
    <ul>
        <li>Calculation of total number of redundant bits</li>
        <li>Checking the position of the redundant bits</li>
        <li>Calculating the values of the redundant bits</li>
    </ul>
</div>

<div class="slide" id="slide5" style="display:none;">
    <h2>Step 1: Total Number of Redundant Bits</h2>
    <p>Let the message contain:</p>
    <ul>
        <li><b>n</b> – number of data bits</li>
        <li><b>p</b> – number of redundant bits added so that it can indicate at least (n + p + 1) different states.</li>
    </ul>
    <p>(n + p) depicts the location of an error in each of (n + p) bit positions, and one extra state means no error. Since p bits indicate 2<sup>p</sup> states, 2<sup>p</sup> must be at least equal to (n + p + 1).</p>
</div>

<div class="slide" id="slide6" style="display:none;">
    <h2>Step 2: Placing the Redundant Bits</h2>
    <p>The redundant bits should be placed in bit positions of powers of 2.</p>
    <ul>
        <li>For example: 1, 2, 4, 8, 16, etc.</li>
        <li>They are referred to as p1 (position 1), p2 (position 2), p3 (position 4), etc.</li>
    </ul>
</div>

<div class="slide" id="slide7" style="display:none;">
    <h2>Step 3: Calculating Values of Redundant Bits</h2>
    <p>The redundant bits should be parity bits that make the number of 1s either even or odd.</p>
    <p><b>Types of Parity:</b></p>
    <ul>
        <li>Even Parity – total number of 1s in the message is made even.</li>
        <li>Odd Parity – total number of 1s in the message is made odd.</li>
    </ul>
</div>

<!-- 🆕 New slides below -->

<div class="slide" id="slide8" style="display:none;">
    <h2>Calculating Parity Bits (p1, p2, p3, ...)</h2>
    <p>All redundant bits (p1, p2, p3, ...) are calculated as parity bits. Each parity bit covers specific positions based on binary representation.</p>
    <ul>
        <li><b>P1</b> – Covers all bit positions whose binary representation includes 1 in the 1st position (excluding position of p1). Example: 3, 5, 7, 9...</li>
        <li><b>P2</b> – Covers positions that include 1 in the 2nd bit from right (excluding position of p2). Example: 3, 6, 7, 10, 11...</li>
        <li><b>P3</b> – Covers positions that include 1 in the 3rd bit from right (excluding position of p3). Example: 5–7, 12–15...</li>
    </ul>
</div>

<div class="slide" id="slide9" style="display:none;">
    <h2>Process of Decrypting a Message in Hamming Code</h2>
    <p>Receiver gets incoming messages which require recalculations to find and correct errors. The process includes:</p>
    <ul>
        <li>Counting the number of redundant bits</li>
        <li>Correctly positioning all redundant bits</li>
        <li>Performing parity check</li>
    </ul>
</div>

<div class="slide" id="slide10" style="display:none;">
    <h2>Step 1: Counting the Number of Redundant Bits</h2>
    <p>You can use the same formula for encoding:</p>
    <p><b>2<sup>p</sup> ≥ n + p + 1</b></p>
    <p>Here, n = number of data bits and p = number of redundant bits.</p>

    <h2>Step 2: Correctly Positioning Redundant Bits</h2>
    <p>Each redundant bit is located at bit positions that are powers of 2 (1, 2, 4, 8, etc.).</p>
</div>

<div class="slide" id="slide11" style="display:none;">
    <h2>Step 3: Parity Check</h2>
    <p>Parity bits are recalculated based on data bits and redundant bits:</p>
    <ul>
        <li>p1 = parity(1, 3, 5, 7, 9, 11…)</li>
        <li>p2 = parity(2-3, 6-7, 10-11…)</li>
        <li>p4 = parity(4-7, 12-15, 20-23…)</li>
        <li>p8 = parity(8-15, 24-31…)</li>
    </ul>
</div>

<div class="navigation">
    <button class="nav-btn" onclick="prevSlide()">Previous</button>
    <button class="nav-btn" onclick="nextSlide()">Next</button>
</div>

<script>
    let currentSlide = 1;
    const totalSlides = 11; // updated total slides

    function showSlide(n) {
        for (let i = 1; i <= totalSlides; i++) {
            const slide = document.getElementById("slide" + i);
            slide.classList.remove("active");
            slide.style.display = "none";
        }
        const activeSlide = document.getElementById("slide" + n);
        activeSlide.style.display = "block";
        setTimeout(() => {
            activeSlide.classList.add("active");
        }, 10);
    }

    function nextSlide() {
        if (currentSlide < totalSlides) {
            currentSlide++;
            showSlide(currentSlide);
        }
    }

    function prevSlide() {
        if (currentSlide > 1) {
            currentSlide--;
            showSlide(currentSlide);
        }
    }

    showSlide(currentSlide);
</script>

<?php include('includes/footer.php'); ?>