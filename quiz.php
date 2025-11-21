<?php include('includes/header.php'); ?>

<h2>🧮 Problem Solving Quiz — Repetition & Hamming Codes (20 Items)</h2>

<form id="quizForm">

    <!-- 🧩 Repetition Code Questions -->
    <h3>🔁 Repetition Codes</h3>

    <!-- Q1 -->
    <div class="quiz-box">
        <p><b>1.</b> A source message <b>101</b> is sent using a Repetition Code with <b>r = 2</b>.  
        What will be the transmitted message?</p>
        <label><input type="radio" name="q1" value="A"> 111000111</label><br>
        <label><input type="radio" name="q1" value="B"> 101010101</label><br>
        <label><input type="radio" name="q1" value="C"> 110110110</label><br>
        <label><input type="radio" name="q1" value="D"> 100100100</label>
    </div>

    <!-- Q2 -->
    <div class="quiz-box">
        <p><b>2.</b> A message bit <b>1</b> is repeated <b>3 times</b>.  
        What is the transmitted group?</p>
        <label><input type="radio" name="q2" value="A"> 100</label><br>
        <label><input type="radio" name="q2" value="B"> 111</label><br>
        <label><input type="radio" name="q2" value="C"> 110</label><br>
        <label><input type="radio" name="q2" value="D"> 011</label>
    </div>

    <!-- Q3 -->
    <div class="quiz-box">
        <p><b>3.</b> If <b>r = 4</b> in a Repetition Code, how many total bits <b>k</b> are transmitted for one message bit?</p>
        <label><input type="radio" name="q3" value="A"> 4</label><br>
        <label><input type="radio" name="q3" value="B"> 5</label><br>
        <label><input type="radio" name="q3" value="C"> 6</label><br>
        <label><input type="radio" name="q3" value="D"> 8</label>
    </div>

    <!-- Q4 -->
    <div class="quiz-box">
        <p><b>4.</b> A received message is <b>000 111 111</b> with <b>r=3</b>.  
        What is the most likely original message?</p>
        <label><input type="radio" name="q4" value="A"> 101</label><br>
        <label><input type="radio" name="q4" value="B"> 011</label><br>
        <label><input type="radio" name="q4" value="C"> 001</label><br>
        <label><input type="radio" name="q4" value="D"> 111</label>
    </div>

    <!-- Q5 -->
    <div class="quiz-box">
        <p><b>5.</b> In a 5-time repetition code, if one bit flips due to noise, can the receiver still detect and correct the error?</p>
        <label><input type="radio" name="q5" value="A"> Yes, using majority voting</label><br>
        <label><input type="radio" name="q5" value="B"> No, it cannot detect it</label><br>
        <label><input type="radio" name="q5" value="C"> Only detect, not correct</label><br>
        <label><input type="radio" name="q5" value="D"> None of the above</label>
    </div>

    <!-- Q6 -->
    <div class="quiz-box">
        <p><b>6.</b> For <b>r = 2</b>, what is the redundancy percentage in the transmitted data?</p>
        <label><input type="radio" name="q6" value="A"> 50%</label><br>
        <label><input type="radio" name="q6" value="B"> 100%</label><br>
        <label><input type="radio" name="q6" value="C"> 200%</label><br>
        <label><input type="radio" name="q6" value="D"> 300%</label>
    </div>

    <!-- Q7 -->
    <div class="quiz-box">
        <p><b>7.</b> A Repetition Code is primarily used to:</p>
        <label><input type="radio" name="q7" value="A"> Compress data</label><br>
        <label><input type="radio" name="q7" value="B"> Detect and correct errors</label><br>
        <label><input type="radio" name="q7" value="C"> Increase speed</label><br>
        <label><input type="radio" name="q7" value="D"> Encrypt data</label>
    </div>

    <!-- Q8 -->
    <div class="quiz-box">
        <p><b>8.</b> If message = <b>10</b> and <b>r = 3</b>, transmitted code = ?</p>
        <label><input type="radio" name="q8" value="A"> 111000</label><br>
        <label><input type="radio" name="q8" value="B"> 100100</label><br>
        <label><input type="radio" name="q8" value="C"> 101010</label><br>
        <label><input type="radio" name="q8" value="D"> 110110</label>
    </div>

    <!-- Q9 -->
  <!-- Q9 -->
<div class="quiz-box">
    <p><b>9.</b> A 3-bit message <b>101</b> is sent using a Repetition Code with <b>r = 3</b>.  
    The transmitted message is:</p>
    <pre><code>Message: 101</code></pre>
    <p>Which of the following is the correct transmitted code?</p>
    <label><input type="radio" name="q9" value="A"> 111000111</label><br>
    <label><input type="radio" name="q9" value="B"> 101101101</label><br>
    <label><input type="radio" name="q9" value="C"> 110110110</label><br>
    <label><input type="radio" name="q9" value="D"> 100100100</label>
</div>

    <!-- Q10 -->
    <div class="quiz-box">
        <p><b>10.</b> If the transmitted repetition code is <b>111000111</b> and received as <b>110000111</b>, what is the corrected bit sequence?</p>
        <label><input type="radio" name="q10" value="A"> 111000111</label><br>
        <label><input type="radio" name="q10" value="B"> 110000111</label><br>
        <label><input type="radio" name="q10" value="C"> 100000111</label><br>
        <label><input type="radio" name="q10" value="D"> 111111111</label>
    </div>

    <!-- 🧮 Hamming Code Questions -->
    <h3>💡 Hamming Codes</h3>

    <!-- Q11 -->
    <div class="quiz-box">
        <p><b>11.</b> Hamming(7,4) adds how many redundant bits to 4 data bits?</p>
        <label><input type="radio" name="q11" value="A"> 2</label><br>
        <label><input type="radio" name="q11" value="B"> 3</label><br>
        <label><input type="radio" name="q11" value="C"> 4</label><br>
        <label><input type="radio" name="q11" value="D"> 5</label>
    </div>

    <!-- Q12 -->
    <div class="quiz-box">
        <p><b>12.</b> If a Hamming(7,4) code receives <b>1011010</b> and error is in bit 3, what’s the corrected code?</p>
        <label><input type="radio" name="q12" value="A"> 1010010</label><br>
        <label><input type="radio" name="q12" value="B"> 1111010</label><br>
        <label><input type="radio" name="q12" value="C"> 1001010</label><br>
        <label><input type="radio" name="q12" value="D"> 1011110</label>
    </div>

    <!-- Q13 -->
    <div class="quiz-box">
        <p><b>13.</b> Hamming Code can detect and correct:</p>
        <label><input type="radio" name="q13" value="A"> 2 errors</label><br>
        <label><input type="radio" name="q13" value="B"> 1 error</label><br>
        <label><input type="radio" name="q13" value="C"> 3 errors</label><br>
        <label><input type="radio" name="q13" value="D"> All errors</label>
    </div>

    <!-- Q14 -->
    <div class="quiz-box">
        <p><b>14.</b> What is the purpose of parity bits in Hamming Code?</p>
        <label><input type="radio" name="q14" value="A"> To store extra messages</label><br>
        <label><input type="radio" name="q14" value="B"> To detect/correct errors</label><br>
        <label><input type="radio" name="q14" value="C"> To increase data rate</label><br>
        <label><input type="radio" name="q14" value="D"> To compress data</label>
    </div>

    <!-- Q15 -->
    <div class="quiz-box">
        <p><b>15.</b> If error pattern = <b>011</b>, which bit has error?</p>
        <label><input type="radio" name="q15" value="A"> 2</label><br>
        <label><input type="radio" name="q15" value="B"> 3</label><br>
        <label><input type="radio" name="q15" value="C"> 4</label><br>
        <label><input type="radio" name="q15" value="D"> 6</label>
    </div>

    <!-- Q16 -->
    <div class="quiz-box">
        <p><b>16.</b> In Hamming(7,4), how many total bits are transmitted?</p>
        <label><input type="radio" name="q16" value="A"> 7</label><br>
        <label><input type="radio" name="q16" value="B"> 8</label><br>
        <label><input type="radio" name="q16" value="C"> 6</label><br>
        <label><input type="radio" name="q16" value="D"> 9</label>
    </div>

    <!-- Q17 -->
    <div class="quiz-box">
        <p><b>17.</b> If no error is detected, the syndrome bits in Hamming Code are:</p>
        <label><input type="radio" name="q17" value="A"> 000</label><br>
        <label><input type="radio" name="q17" value="B"> 111</label><br>
        <label><input type="radio" name="q17" value="C"> 010</label><br>
        <label><input type="radio" name="q17" value="D"> 001</label>
    </div>

    <!-- Q18 -->
    <div class="quiz-box">
        <p><b>18.</b> Hamming codes use parity bits located at:</p>
        <label><input type="radio" name="q18" value="A"> Positions 1, 2, 4</label><br>
        <label><input type="radio" name="q18" value="B"> Positions 2, 3, 5</label><br>
        <label><input type="radio" name="q18" value="C"> Positions 1, 3, 7</label><br>
        <label><input type="radio" name="q18" value="D"> Positions 1, 2, 3</label>
    </div>

    <!-- Q19 -->
    <div class="quiz-box">
        <p><b>19.</b> What does a syndrome value of <b>101</b> indicate?</p>
        <label><input type="radio" name="q19" value="A"> Error at bit 5</label><br>
        <label><input type="radio" name="q19" value="B"> Error at bit 1</label><br>
        <label><input type="radio" name="q19" value="C"> Error at bit 3</label><br>
        <label><input type="radio" name="q19" value="D"> No error</label>
    </div>

    <!-- Q20 -->
    <div class="quiz-box">
        <p><b>20.</b> Hamming(7,4) is a type of:</p>
        <label><input type="radio" name="q20" value="A"> Block code</label><br>
        <label><input type="radio" name="q20" value="B"> Cyclic code</label><br>
        <label><input type="radio" name="q20" value="C"> Linear block code</label><br>
        <label><input type="radio" name="q20" value="D"> Parity check code</label>
    </div>

    <button type="button" class="btn" onclick="checkAnswers()">Submit Answers</button>
</form>

<div id="quizResult" class="result-box"></div>

<script>
function checkAnswers() {
    const correct = {
        q1:"A", q2:"B", q3:"B", q4:"A", q5:"A",
        q6:"B", q7:"B", q8:"A", q9:"A", q10:"A",
        q11:"B", q12:"A", q13:"B", q14:"B", q15:"B",
        q16:"A", q17:"A", q18:"A", q19:"A", q20:"C"
    };

    let score = 0;
    let feedback = "<h3>Results:</h3><ul>";

    for (let key in correct) {
        const selected = document.querySelector(`input[name="${key}"]:checked`);
        if (selected) {
            if (selected.value === correct[key]) {
                score++;
                feedback += `<li><b>Q${key.substring(1)}:</b> ✅ Correct</li>`;
            } else {
                feedback += `<li><b>Q${key.substring(1)}:</b> ❌ Wrong</li>`;
            }
        } else {
            feedback += `<li><b>Q${key.substring(1)}:</b> ⚠️ Not answered</li>`;
        }
    }

    feedback += `</ul><h3>Your Score: ${score}/20</h3>`;
    document.getElementById("quizResult").innerHTML = feedback;
}
</script>

<style>
.quiz-box {
    background: #5c4848ff;
    border: 2px solid #ccc;
    border-radius: 10px;
    padding: 15px;
    margin-bottom: 15px;
}
.quiz-box p { font-weight: bold; }
.quiz-box label { display: block; margin: 5px 0; cursor: pointer; }
.btn {
    background: #007bff;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 8px;
    cursor: pointer;
}
.btn:hover { background: #0056b3; }
.result-box {
    margin-top: 20px;
    padding: 15px;
    background: #e8f5e9;
    border-left: 6px solid #4caf50;
}
</style>

<?php include('includes/footer.php'); ?>