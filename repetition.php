<?php include('includes/header.php'); ?>

<div class="slide" id="slide1">
    <h2>What is a Repetition Code?</h2>
    <p>Repetition codes are one of the simplest types of error detection and correction codes used in digital communication systems.</p>

    <div class="example-box">
        <p><b>Definition:</b></p>
        <p>A repetition code works by repeating each bit of data multiple times to help detect and possibly correct errors that occur during transmission.</p>
    </div>

    <p>It is one of the most basic error-correcting codes used to increase reliability in communication systems.</p>
</div>

<div class="slide" id="slide2" style="display:none;">
    <h2>Concept of Repetition Code</h2>
    <p>Repetition coding ensures data accuracy by transmitting each bit several times. If an error occurs during transmission, the receiver uses majority voting to determine the original bit value.</p>
</div>

<div class="slide" id="slide3" style="display:none;">
    <h2>Repetition Code Formula</h2>
    <p>The formula to determine how many times each bit should be repeated is:</p>

    <div class="example-box">
        <p><b>Formula:</b> k = 2r + 1</p>
        <p>Where <b>r</b> is the number of redundant bits added for error correction.</p>
    </div>
</div>

<!-- ✅ Example 1 -->
<div class="slide" id="slide4" style="display:none;">
    <h2>Example 1: Encoding Process</h2>
    <p>Suppose the source message is <b>101</b>. If <b>r = 2</b>, what will be the transmitted message using repetition coding?</p>
    <p><b>Solution:</b></p>
    <p>k = 2r + 1</p>
    <p>k = 2(2) + 1 = <b>5</b></p>

    <p><b>Step 1:</b> Repeat each bit 5 times:</p>
    <ul>
        <li>1 → 11111</li>
        <li>0 → 00000</li>
        <li>1 → 11111</li>
    </ul>

    <p><b>Step 2:</b> Combine all groups:</p>
    <p><b>Resulting Message:</b> 111110000011111</p>
</div>

<!-- ✅ Example 2 -->
<div class="slide" id="slide5" style="display:none;">
    <h2>Example 2: Transmission with Error</h2>
    <p>The encoded message <b>11111 00000 11111</b> was transmitted, but due to noise, it was received as <b>111100000011101</b>. If <b>r = 2</b>, find the original source message.</p>

    <p><b>Step 1:</b> Group bits into sets of 5 (since r = 2 → k = 5):</p>
    <p>Groups: (11110) (00000) (11101)</p>

    <p><b>Step 2:</b> Apply majority voting for each group:</p>
    <ul>
        <li>11110 → 1’s = 4 → <b>1</b></li>
        <li>00000 → 0’s = 5 → <b>0</b></li>
        <li>11101 → 1’s = 4 → <b>1</b></li>
    </ul>

    <p><b>Step 3:</b> Decoded message = <b>101</b></p>
</div>

<!-- ✅ Example 3 -->
<div class="slide" id="slide6" style="display:none;">
    <h2>Example 3: Larger Bit Sequence (Question)</h2>
    <p>Suppose the source encoded message is <b>0110</b>. If <b>r = 3</b>, what will be the transmitted message using repetition coding?</p>
     <p><b>Formula:</b> k = 2r + 1</p>
    <p><b>Next Page:</b> What will be the original message if it has a transmission error?</p>
</div>

<!-- ✅ Example 3 - Solution -->
<div class="slide" id="slide7" style="display:none;">
    <h2>Example 3: Larger Bit Sequence (Solution with Noise)</h2>
    <p><b>Given:</b> Message = 0110, r = 3</p>

    <p><b>Step 1:</b> Compute repetition factor: k = 2r + 1 = 2(3) + 1 = <b>7</b></p>

    <p><b>Step 2:</b> Repeat each bit 7 times:</p>
    <pre>
0 → 0000000
1 → 1111111
1 → 1111111
0 → 0000000
    </pre>
    <p><b>Transmitted Message:</b> 0000000111111111111110000000</p>

    <p><b>Step 3:</b> Suppose noise occurred and the received message was:</p>
    <p><b>Received:</b> 0010100110111110111110001000</p>

    <p><b>Step 4:</b> Group bits into 7-bit sets and apply majority voting:</p>

    <table border="1" cellpadding="6">
        <tr><th>Group</th><th>Bits</th><th>Majority</th><th>Decoded</th></tr>
        <tr><td>1</td><td>0010100</td><td>0’s = 5, 1’s = 2</td><td><b>0</b></td></tr>
        <tr><td>2</td><td>1101111</td><td>1’s = 6, 0’s = 1</td><td><b>1</b></td></tr>
        <tr><td>3</td><td>1011111</td><td>1’s = 6, 0’s = 1</td><td><b>1</b></td></tr>
        <tr><td>4</td><td>0001000</td><td>0’s = 6, 1’s = 1</td><td><b>0</b></td></tr>
    </table>

    <p><b>Decoded Message:</b> 0110 ✅ (original recovered successfully)</p>
</div>

<!-- ✅ Navigation -->
<div class="navigation">
    <button class="nav-btn" onclick="prevSlide()">Previous</button>
    <button class="nav-btn" onclick="nextSlide()">Next</button>
</div>

<script>
    let currentSlide = 1;
    const totalSlides = 7; // ✅ updated total slides

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

<style>
.example-box {
    background-color: #fffaf0;
    border-radius: 10px;
    padding: 20px;
    border-left: 6px solid #a50000;
    margin: 20px 0;
}
table {
    border-collapse: collapse;
    width: 100%;
    margin-top: 10px;
}
th, td {
    text-align: center;
}
</style>

<?php include('includes/footer.php'); ?>