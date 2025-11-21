<?php include('includes/header.php'); ?>

<div class="hero-section">
    <div class="hero-content">
        <h1 class="hero-title animate-fade-in">Welcome to Modern Mathematics Presentation</h1>
        <p class="hero-subtitle animate-fade-in-delay">
            Discover the fascinating world of error detection and correction in digital communication through interactive lessons.
        </p>
    </div>
    <div class="hero-background">
        <div class="floating-shape shape-1"></div>
        <div class="floating-shape shape-2"></div>
        <div class="floating-shape shape-3"></div>
    </div>
</div>

<div class="container">
    <div class="intro-section">
        <div class="intro-text">
            <h2>Understanding Error Correction</h2>
            <p>
                This interactive platform will help you master the fundamentals of <strong class="highlight">Repetition Codes</strong> and <strong class="highlight">Hamming Codes</strong>,
                two essential techniques that ensure reliable data transmission in our digital world.
            </p>
            <p>
                From simple repetition methods to sophisticated parity-check systems, you'll explore how errors are detected and corrected in modern communication systems.
            </p>
        </div>
        
        <div class="features-grid">
            <div class="feature-card animate-card">
                <div class="feature-icon">🔍</div>
                <h3>Error Detection</h3>
                <p>Learn how to identify when data has been corrupted during transmission</p>
            </div>
            <div class="feature-card animate-card">
                <div class="feature-icon">🛠️</div>
                <h3>Error Correction</h3>
                <p>Discover techniques to automatically fix errors without retransmission</p>
            </div>
            <div class="feature-card animate-card">
                <div class="feature-icon">📊</div>
                <h3>Interactive Examples</h3>
                <p>Practice with hands-on examples and visual demonstrations</p>
            </div>
        </div>
    </div>

    <div class="lessons-section">
        <h2 class="section-title">Choose Your Learning Path</h2>
        <p class="section-subtitle">Click on a topic below to begin your journey</p>
        
        <div class="lesson-cards">
            <a href="hamming.php" class="lesson-card hamming-card">
                <div class="card-content">
                    <div class="card-icon">⚡</div>
                    <h3>Hamming Code</h3>
                    <p>Advanced error-correction method using parity bits in strategic positions</p>
                    <div class="card-footer">
                        <span class="btn-card">Start Learning</span>
                    </div>
                </div>
                <div class="card-hover-effect"></div>
            </a>
            
            <a href="repetition.php" class="lesson-card repetition-card">
                <div class="card-content">
                    <div class="card-icon">🔄</div>
                    <h3>Repetition Code</h3>
                    <p>Simple yet effective approach of repeating data bits for redundancy</p>
                    <div class="card-footer">
                        <span class="btn-card">Start Learning</span>
                    </div>
                </div>
                <div class="card-hover-effect"></div>
            </a>
        </div>
    </div>
</div>

<style>
    :root {
        --primary-red: #e53935;
        --dark-red: #c62828;
        --light-red: #ff5252;
        --lighter-red: #ffcdd2;
        --dark-bg: #121212;
        --card-bg: #1e1e1e;
        --text-light: #f5f5f5;
        --text-muted: #b0b0b0;
    }
    
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: var(--dark-bg);
        color: var(--text-light);
        line-height: 1.6;
        overflow-x: hidden;
    }
    
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }
    
    /* Hero Section */
    .hero-section {
        position: relative;
        height: 70vh;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        background: linear-gradient(135deg, var(--dark-red) 0%, var(--primary-red) 100%);
        overflow: hidden;
    }
    
    .hero-content {
        z-index: 2;
        position: relative;
        max-width: 800px;
        padding: 0 20px;
    }
    
    .hero-title {
        font-size: 3.5rem;
        margin-bottom: 1rem;
        font-weight: 700;
    }
    
    .hero-subtitle {
        font-size: 1.3rem;
        opacity: 0.9;
        margin-bottom: 2rem;
    }
    
    .hero-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    
    .floating-shape {
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.1);
        animation: float 6s ease-in-out infinite;
    }
    
    .shape-1 {
        width: 100px;
        height: 100px;
        top: 20%;
        left: 10%;
        animation-delay: 0s;
    }
    
    .shape-2 {
        width: 150px;
        height: 150px;
        top: 60%;
        right: 10%;
        animation-delay: 2s;
    }
    
    .shape-3 {
        width: 70px;
        height: 70px;
        bottom: 20%;
        left: 20%;
        animation-delay: 4s;
    }
    
    /* Intro Section */
    .intro-section {
        padding: 5rem 0;
    }
    
    .intro-text {
        max-width: 800px;
        margin: 0 auto 4rem;
        text-align: center;
    }
    
    .intro-text h2 {
        font-size: 2.5rem;
        margin-bottom: 1.5rem;
        color: var(--text-light);
    }
    
    .intro-text p {
        font-size: 1.2rem;
        margin-bottom: 1.5rem;
        color: var(--text-muted);
    }
    
    .highlight {
        color: var(--light-red);
        font-weight: 600;
    }
    
    /* Features Grid */
    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 2rem;
        margin-top: 3rem;
    }
    
    .feature-card {
        background-color: var(--card-bg);
        border-radius: 12px;
        padding: 2rem;
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    
    .feature-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }
    
    .feature-icon {
        font-size: 3rem;
        margin-bottom: 1rem;
    }
    
    .feature-card h3 {
        font-size: 1.5rem;
        margin-bottom: 1rem;
        color: var(--text-light);
    }
    
    .feature-card p {
        color: var(--text-muted);
    }
    
    /* Lessons Section */
    .lessons-section {
        padding: 5rem 0;
    }
    
    .section-title {
        text-align: center;
        font-size: 2.5rem;
        margin-bottom: 1rem;
        color: var(--text-light);
    }
    
    .section-subtitle {
        text-align: center;
        font-size: 1.2rem;
        margin-bottom: 3rem;
        color: var(--text-muted);
    }
    
    .lesson-cards {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
    }
    
    .lesson-card {
        position: relative;
        background-color: var(--card-bg);
        border-radius: 16px;
        overflow: hidden;
        transition: transform 0.3s ease;
        text-decoration: none;
        color: inherit;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }
    
    .lesson-card:hover {
        transform: translateY(-10px);
    }
    
    .card-content {
        position: relative;
        z-index: 2;
        padding: 2.5rem;
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    
    .card-icon {
        font-size: 3.5rem;
        margin-bottom: 1.5rem;
    }
    
    .lesson-card h3 {
        font-size: 1.8rem;
        margin-bottom: 1rem;
        color: var(--text-light);
    }
    
    .lesson-card p {
        color: var(--text-muted);
        margin-bottom: 2rem;
        flex-grow: 1;
    }
    
    .card-footer {
        margin-top: auto;
    }
    
    .btn-card {
        display: inline-block;
        padding: 0.8rem 1.5rem;
        background-color: var(--primary-red);
        color: white;
        border-radius: 50px;
        font-weight: 600;
        transition: background-color 0.3s ease;
    }
    
    .lesson-card:hover .btn-card {
        background-color: var(--dark-red);
    }
    
    .card-hover-effect {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, var(--primary-red) 0%, transparent 70%);
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    
    .lesson-card:hover .card-hover-effect {
        opacity: 0.1;
    }
    
    .hamming-card {
        border-top: 4px solid var(--primary-red);
    }
    
    .repetition-card {
        border-top: 4px solid var(--light-red);
    }
    
    /* Animations */
    @keyframes float {
        0% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(-20px);
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
    
    .animate-fade-in {
        animation: fadeIn 1s ease-out;
    }
    
    .animate-fade-in-delay {
        animation: fadeIn 1s ease-out 0.3s both;
    }
    
    .animate-card {
        animation: fadeIn 1s ease-out 0.6s both;
    }
    
    /* Responsive Design */
    @media (max-width: 768px) {
        .hero-title {
            font-size: 2.5rem;
        }
        
        .hero-subtitle {
            font-size: 1.1rem;
        }
        
        .intro-text h2, .section-title {
            font-size: 2rem;
        }
        
        .lesson-cards {
            grid-template-columns: 1fr;
        }
    }
</style>

<?php include('includes/footer.php'); ?>