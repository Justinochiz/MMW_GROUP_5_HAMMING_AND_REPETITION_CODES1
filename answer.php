<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repetition and Hamming Codes | TUP - MMW Report</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* 🎨 Modern CSS Variables */
        :root {
            --primary-red: #800000;
            --dark-red: #660000;
            --light-red: #a83232;
            --accent-green: #28a745;
            --dark-bg: #1a1a1a;
            --card-bg: #2d2d2d;
            --text-light: #ffffff;
            --text-muted: #b0b0b0;
            --gradient-bg: linear-gradient(135deg, var(--primary-red) 0%, var(--dark-bg) 100%);
            --shadow: 0 8px 30px rgba(0, 0, 0, 0.3);
            --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        /* 🎨 Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: var(--dark-bg);
            color: var(--text-light);
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* 🎨 Header and Navigation */
        header {
            background: var(--gradient-bg);
            color: var(--text-light);
            text-align: center;
            padding: 25px 0;
            position: relative;
            overflow: hidden;
        }

        .header-content {
            position: relative;
            z-index: 2;
        }

        header h1 {
            margin: 10px 0;
            font-size: 2.2rem;
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        header p {
            margin: 0;
            font-size: 1.1rem;
            opacity: 0.9;
        }

        .header-decoration {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            opacity: 0.1;
        }

        .decoration-circle {
            position: absolute;
            border-radius: 50%;
            background: white;
            animation: float 8s ease-in-out infinite;
        }

        .circle-1 {
            width: 120px;
            height: 120px;
            top: 10%;
            left: 10%;
            animation-delay: 0s;
        }

        .circle-2 {
            width: 80px;
            height: 80px;
            top: 60%;
            right: 15%;
            animation-delay: 2s;
        }

        .circle-3 {
            width: 60px;
            height: 60px;
            bottom: 20%;
            left: 20%;
            animation-delay: 4s;
        }

        /* 🎨 Navigation */
        nav {
            background: rgba(40, 40, 40, 0.95);
            backdrop-filter: blur(10px);
            display: flex;
            justify-content: center;
            padding: 12px 0;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 12px;
            padding: 10px 20px;
            border-radius: 8px;
            transition: var(--transition);
            font-weight: 500;
            position: relative;
            overflow: hidden;
        }

        nav a::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 3px;
            background: var(--primary-red);
            transition: var(--transition);
        }

        nav a:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-2px);
        }

        nav a:hover::before {
            width: 100%;
        }

        nav a.active {
            background: var(--primary-red);
        }

        nav a.active::before {
            width: 100%;
            background: white;
        }

        /* 🎯 Quiz Navigation Bar */
        .quiz-nav {
            display: flex;
            justify-content: center;
            background: var(--card-bg);
            padding: 15px;
            border-radius: 12px;
            margin: 30px auto;
            width: fit-content;
            box-shadow: var(--shadow);
            gap: 15px;
        }

        .quiz-nav a {
            color: var(--text-light);
            text-decoration: none;
            padding: 12px 25px;
            border-radius: 8px;
            background: var(--primary-red);
            font-weight: 600;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .quiz-nav a:hover {
            background: var(--light-red);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(128, 0, 0, 0.4);
        }

        .quiz-nav a.active {
            background: var(--accent-green);
            transform: translateY(-2px);
        }

        /* 📘 Answer Key Styling */
        .answer-container {
            background: var(--card-bg);
            border-radius: 16px;
            padding: 30px;
            width: 90%;
            max-width: 1000px;
            margin: 20px auto;
            box-shadow: var(--shadow);
            transition: var(--transition);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .answer-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.4);
        }

        .answer-container h2 {
            text-align: center;
            color: var(--text-light);
            font-size: 2.2rem;
            margin-bottom: 30px;
            position: relative;
            padding-bottom: 15px;
        }

        .answer-container h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: var(--primary-red);
            border-radius: 2px;
        }

        .answer-container h3 {
            color: var(--primary-red);
            border-bottom: 2px solid var(--primary-red);
            padding-bottom: 10px;
            margin-top: 30px;
            font-size: 1.5rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .answer-container ul {
            list-style-type: none;
            padding-left: 0;
            margin-top: 15px;
        }

        .answer-container li {
            margin: 12px 0;
            padding: 15px;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.05);
            transition: var(--transition);
            border-left: 4px solid transparent;
            display: flex;
            align-items: center;
        }

        .answer-container li:hover {
            background: rgba(128, 0, 0, 0.2);
            transform: translateX(5px);
            border-left: 4px solid var(--primary-red);
        }

        .answer-container li b {
            margin-right: 10px;
            background: var(--primary-red);
            color: white;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 0.9rem;
        }

        /* 🎨 Footer */
        footer {
            text-align: center;
            background: var(--dark-bg);
            color: var(--text-muted);
            padding: 25px 0;
            margin-top: 60px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* ✨ Animations */
        @keyframes float {
            0% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-15px);
            }
            100% {
                transform: translateY(0px);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in {
            animation: fadeIn 0.8s ease-out;
        }

        .stagger-item {
            opacity: 0;
            animation: fadeIn 0.6s ease-out forwards;
        }

        /* 📱 Responsive Design */
        @media (max-width: 768px) {
            header h1 {
                font-size: 1.8rem;
            }
            
            header p {
                font-size: 1rem;
            }
            
            nav {
                flex-wrap: wrap;
                padding: 10px;
            }
            
            nav a {
                margin: 5px;
                padding: 8px 15px;
                font-size: 0.9rem;
            }
            
            .quiz-nav {
                flex-direction: column;
                width: 90%;
            }
            
            .answer-container {
                padding: 20px;
                width: 95%;
            }
            
            .answer-container h2 {
                font-size: 1.8rem;
            }
            
            .answer-container h3 {
                font-size: 1.3rem;
            }
        }
    </style>
</head>
<body>

<header>
    <div class="header-decoration">
        <div class="decoration-circle circle-1"></div>
        <div class="decoration-circle circle-2"></div>
        <div class="decoration-circle circle-3"></div>
    </div>
    <div class="header-content">
        <h1>Technological University of the Philippines - Taguig</h1>
        <p>College of Engineering • Modern Mathematics in the Modern World</p>
    </div>
</header>

<nav>
    <a href="index.php"><i class="fas fa-home"></i> Home</a>
    <a href="theory.php"><i class="fas fa-book"></i> Theory</a>
    <a href="examples.php"><i class="fas fa-lightbulb"></i> Examples</a>
    <a href="quiz.php"><i class="fas fa-question-circle"></i> Quiz</a>
    <a href="answer.php" class="active"><i class="fas fa-key"></i> Answer Key</a>
    <a href="members.php"><i class="fas fa-users"></i> Members</a>
</nav>

<section class="fade-in">

    <!-- 🧭 Quiz Navigation -->
    <div class="quiz-nav">
        <a href="quiz.php"><i class="fas fa-question-circle"></i> Take the Quiz</a>
        <a href="answer.php" class="active"><i class="fas fa-key"></i> Answer Key</a>
    </div>

    <div class="answer-container">
        <h2><i class="fas fa-key"></i> Answer Key — Repetition & Hamming Codes Quiz</h2>

        <h3><i class="fas fa-redo"></i> Repetition Codes</h3>
        <ul>
            <li class="stagger-item" style="animation-delay: 0.1s"><b>1</b> A — 111000111</li>
            <li class="stagger-item" style="animation-delay: 0.2s"><b>2</b> B — 111</li>
            <li class="stagger-item" style="animation-delay: 0.3s"><b>3</b> B — 5 bits total (4 data + 1 redundant)</li>
            <li class="stagger-item" style="animation-delay: 0.4s"><b>4</b> A — 101</li>
            <li class="stagger-item" style="animation-delay: 0.5s"><b>5</b> A — Yes, using majority voting</li>
            <li class="stagger-item" style="animation-delay: 0.6s"><b>6</b> B — 100% redundancy</li>
            <li class="stagger-item" style="animation-delay: 0.7s"><b>7</b> B — Detect and correct errors</li>
            <li class="stagger-item" style="animation-delay: 0.8s"><b>8</b> A — 111000</li>
            <li class="stagger-item" style="animation-delay: 0.9s"><b>9</b> A — 111000111</li>
            <li class="stagger-item" style="animation-delay: 1.0s"><b>10</b> A — 111000111</li>
        </ul>
        
        <h3><i class="fas fa-bolt"></i> Hamming Codes</h3>
        <ul>
            <li class="stagger-item" style="animation-delay: 1.1s"><b>11</b> B — 3 redundant bits</li>
            <li class="stagger-item" style="animation-delay: 1.2s"><b>12</b> A — 1010010</li>
            <li class="stagger-item" style="animation-delay: 1.3s"><b>13</b> B — 1 error</li>
            <li class="stagger-item" style="animation-delay: 1.4s"><b>14</b> B — To detect/correct errors</li>
            <li class="stagger-item" style="animation-delay: 1.5s"><b>15</b> B — Error in bit 3</li>
            <li class="stagger-item" style="animation-delay: 1.6s"><b>16</b> A — 7 bits total</li>
            <li class="stagger-item" style="animation-delay: 1.7s"><b>17</b> A — 000 (no error)</li>
            <li class="stagger-item" style="animation-delay: 1.8s"><b>18</b> A — Parity bits at positions 1, 2, 4</li>
            <li class="stagger-item" style="animation-delay: 1.9s"><b>19</b> A — Error at bit 5</li>
            <li class="stagger-item" style="animation-delay: 2.0s"><b>20</b> C — Linear block code</li>
        </ul>
    </div>
</section>

<footer>
    <p>© 2025 Technological University of the Philippines - Taguig | MMW Report</p>
</footer>

<script>
    // Add interactive effects
    document.addEventListener('DOMContentLoaded', function() {
        // Add hover sound effect (optional)
        const links = document.querySelectorAll('a, .answer-container li');
        
        links.forEach(link => {
            link.addEventListener('mouseenter', function() {
                this.style.transform = this.style.transform || '';
            });
            
            link.addEventListener('mouseleave', function() {
                this.style.transform = '';
            });
        });
        
        // Animate elements on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);
        
        // Observe all stagger items
        document.querySelectorAll('.stagger-item').forEach(item => {
            item.style.opacity = '0';
            item.style.transform = 'translateY(20px)';
            item.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(item);
        });
    });
</script>

</body>
</html>