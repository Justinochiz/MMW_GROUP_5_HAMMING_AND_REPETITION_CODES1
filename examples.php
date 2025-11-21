ex:
<?php include('includes/header.php'); ?>

<div class="hero-section">
    <div class="hero-content">
        <h1 class="hero-title animate-fade-in">Practical Examples</h1>
        <p class="hero-subtitle animate-fade-in-delay">
            Explore real-world applications of Repetition and Hamming Codes through interactive examples
        </p>
    </div>
    <div class="hero-background">
        <div class="floating-shape shape-1"></div>
        <div class="floating-shape shape-2"></div>
        <div class="floating-shape shape-3"></div>
    </div>
</div>

<div class="container">
    <div class="examples-nav">
        <button class="nav-btn active" data-target="hamming">Hamming Codes</button>
        <button class="nav-btn" data-target="repetition">Repetition Codes</button>
        <button class="nav-btn" data-target="error-correction">Error Correction</button>
    </div>

    <!-- Hamming Codes Section -->
    <section id="hamming" class="examples-section active">
        <h2 class="section-title"><i class="fas fa-bolt"></i> Hamming Code Examples</h2>
        
        <div class="example-card animate-card">
            <div class="card-header">
                <h3><i class="fas fa-code"></i> Example 1: Basic Hamming Encoding</h3>
                <span class="difficulty-badge easy">Easy</span>
            </div>
            <div class="card-content">
                <div class="data-flow">
                    <div class="flow-step">
                        <div class="step-label">Original Data</div>
                        <div class="step-value code-box">1011</div>
                    </div>
                    <div class="flow-arrow">→</div>
                    <div class="flow-step">
                        <div class="step-label">Encoded with Parity</div>
                        <div class="step-value code-box highlight">1011010</div>
                    </div>
                    <div class="flow-arrow">→</div>
                    <div class="flow-step">
                        <div class="step-label">Received (Error)</div>
                        <div class="step-value code-box error">1011110</div>
                    </div>
                    <div class="flow-arrow">→</div>
                    <div class="flow-step">
                        <div class="step-label">Corrected</div>
                        <div class="step-value code-box success">1011010</div>
                    </div>
                </div>
                
                <div class="explanation">
                    <h4><i class="fas fa-lightbulb"></i> How it works:</h4>
                    <p>Hamming codes add parity bits at positions that are powers of 2 (1, 2, 4, 8...). When an error occurs, the syndrome calculation identifies the exact bit position that needs correction.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Repetition Codes Section -->
    <section id="repetition" class="examples-section">
        <h2 class="section-title"><i class="fas fa-redo"></i> Repetition Code Examples</h2>
        
        <div class="example-card animate-card">
            <div class="card-header">
                <h3><i class="fas fa-calculator"></i> Example 1: Basic Repetition Encoding</h3>
                <span class="difficulty-badge easy">Beginner</span>
            </div>
            <div class="card-content">
                <div class="problem-statement">
                    <p>Suppose that the source encoded message is <code class="inline-code">101</code>. If <code class="inline-code">r = 3</code>, what will be the transmitted message?</p>
                </div>
                
                <div class="solution-steps">
                    <div class="step">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <p><b>Calculate k (repetition factor):</b></p>
                            <div class="formula-box">
                                k = 2r + 1 = 2(3) + 1 = 7
                            </div>
                        </div>
                    </div>
                    
                    <div class="step">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <p><b>Repeat each bit k times:</b></p>
                            <div class="bit-repetition">
                                <div class="bit-group">
                                    <span class="original-bit">1</span>
                                    <span class="repeated-bits">→ 1111111</span>
                                </div>
                                <div class="bit-group">
                                    <span class="original-bit">0</span>
                                    <span class="repeated-bits">→ 0000000</span>
                                </div>
                                <div class="bit-group">
                                    <span class="original-bit">1</span>
                                    <span class="repeated-bits">→ 1111111</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="step">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <p><b>Final transmitted message:</b></p>
                            <div class="result-box">
                                <code>1111111 0000000 1111111</code>
                                <div class="result-note">21 bits total (3 original bits × 7 repetitions)</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="example-card animate-card">
            <div class="card-header">
                <h3><i class="fas fa-calculator"></i> Example 2: Another Repetition Case</h3>
                <span class="difficulty-badge easy">Beginner</span>
            </div>
            <div class="card-content">
                <div class="problem-statement">
                    <p>Suppose that the source encoded message is <code class="inline-code">01</code>. If <code class="inline-code">r = 2</code>, what will be the transmitted message?</p>
                </div>
                
                <div class="solution-steps">
                    <div class="step">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <p><b>Calculate k (repetition factor):</b></p>
                            <div class="formula-box">
                                k = 2r + 1 = 2(2) + 1 = 5
                            </div>
                        </div>
                    </div>
                    
                    <div class="step">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <p><b>Repeat each bit k times:</b></p>
                            <div class="bit-repetition">
                                <div class="bit-group">
                                    <span class="original-bit">0</span>
                                    <span class="repeated-bits">→ 00000</span>
                                </div>
                                <div class="bit-group">
                                    <span class="original-bit">1</span>
                                    <span class="repeated-bits">→ 11111</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="step">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <p><b>Final transmitted message:</b></p>
                            <div class="result-box">
                                <code>0000011111</code>
                                <div class="result-note">10 bits total (2 original bits × 5 repetitions)</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Error Correction Section -->
    <section id="error-correction" class="examples-section">
        <h2 class="section-title"><i class="fas fa-wrench"></i> Error Correction Examples</h2>
        
        <div class="example-card animate-card">
            <div class="card-header">
                <h3><i class="fas fa-bug"></i> Example 3: Error Detection & Correction</h3>
                <span class="difficulty-badge intermediate">Intermediate</span>
            </div>
            <div class="card-content">
                <div class="problem-statement">
                    <p>What if noise affected the message and the received message was <code class="inline-code">00011011111101101001</code>? Determine the correct source encoded message if <code class="inline-code">r = 3</code>.</p>
                </div>
                
                <div class="solution-steps">
                    <div class="step">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <p><b>Group bits into sets of 7 (since r = 3 → k = 7):</b></p>
                            <div class="bit-groups">
                                <div class="bit-group-box">
                                    <span class="group-label">Group 1:</span>
                                    <code>0001101</code>
                                </div>
                                <div class="bit-group-box">
                                    <span class="group-label">Group 2:</span>
                                    <code>1111101</code>
                                </div>
                                <div class="bit-group-box">
                                    <span class="group-label">Group 3:</span>
                                    <code>101001</code>
                                    <span class="incomplete">(incomplete)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="step">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <p><b>Apply majority voting to each group:</b></p>
                            <div class="majority-voting">
                                <div class="voting-group">
                                    <div class="voting-header">
                                        <span class="group-name">Group 1: 0001101</span>
                                        <span class="counts">(0's: 4, 1's: 3)</span>
                                    </div>
                                    <div class="voting-result success">
                                        Majority: <b>0</b> (more 0's than 1's)
                                    </div>
                                </div>
                                
                                <div class="voting-group">
                                    <div class="voting-header">
                                        <span class="group-name">Group 2: 1111101</span>
                                        <span class="counts">(0's: 1, 1's: 6)</span>
                                    </div>
                                    <div class="voting-result success">
                                        Majority: <b>1</b> (more 1's than 0's)
                                    </div>
                                </div>
                                
                                <div class="voting-group">
                                    <div class="voting-header">
                                        <span class="group-name">Group 3: 101001</span>
                                        <span class="counts">(0's: 3, 1's: 3)</span>
                                    </div>
                                    <div class="voting-result warning">
                                        Tie! Cannot determine majority
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="step">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <p><b>Recovered message:</b></p>
                            <div class="result-box">
                                <code>01</code>
                                <div class="result-note">Third group discarded due to incomplete data and tie</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
    /* Modern Examples Page Styles */
    .examples-nav {
        display: flex;
        justify-content: center;
        gap: 15px;
        margin: 40px 0;
        flex-wrap: wrap;
    }
    
    .nav-btn {
        padding: 12px 24px;
        background: var(--card-bg);
        border: 2px solid var(--primary-red);
        color: var(--text-light);
        border-radius: 50px;
        cursor: pointer;
        transition: var(--transition);
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    
    .nav-btn:hover {
        background: var(--primary-red);
        transform: translateY(-2px);
    }
    
    .nav-btn.active {
        background: var(--primary-red);
        box-shadow: 0 4px 15px rgba(128, 0, 0, 0.4);
    }
    
    .examples-section {
        display: none;
        animation: fadeIn 0.5s ease-out;
    }
    
    .examples-section.active {
        display: block;
    }
    
    .example-card {
        background: var(--card-bg);
        border-radius: 16px;
        margin: 30px 0;
        overflow: hidden;
        box-shadow: var(--shadow);
        transition: var(--transition);
        border: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .example-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 40px rgba(0, 0, 0, 0.4);
    }
    
    .card-header {
        background: linear-gradient(135deg, var(--primary-red) 0%, var(--light-red) 100%);
        padding: 20px 30px;
        display: flex;
        justify-content: between;
        align-items: center;
    }
    
    .card-header h3 {
        margin: 0;
        flex-grow: 1;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    .difficulty-badge {
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
    }
    
    .difficulty-badge.easy {
        background: #28a745;
        color: white;
    }
    
    .difficulty-badge.intermediate {
        background: #ffc107;
        color: black;
    }
    
    .card-content {
        padding: 30px;
    }
    
    /* Data Flow Styles */
    .data-flow {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 15px;
        margin: 20px 0;
    }
    
    .flow-step {
        text-align: center;
        flex: 1;
        min-width: 150px;
    }
    
    .step-label {
        font-size: 0.9rem;
        color: var(--text-muted);
        margin-bottom: 8px;
    }
    
    .code-box {
        padding: 12px;
        background: rgba(0, 0, 0, 0.3);
        border-radius: 8px;
        font-family: 'Courier New', monospace;
        font-weight: bold;
        border: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .code-box.highlight {
        background: rgba(128, 0, 0, 0.3);
        border-color: var(--primary-red);
    }
    
    .code-box.error {
        background: rgba(220, 53, 69, 0.3);
        border-color: #dc3545;
    }
    
    .code-box.success {
        background: rgba(40, 167, 69, 0.3);
        border-color: #28a745;
    }
    
    .flow-arrow {
        font-size: 1.5rem;
        color: var(--primary-red);
        font-weight: bold;
    }
    
    /* Solution Steps */
    .solution-steps {
        margin: 25px 0;
    }
    
    .step {
        display: flex;
        margin: 20px 0;
        align-items: flex-start;
    }
    
    .step-number {
        background: var(--primary-red);
        color: white;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        margin-right: 15px;
        flex-shrink: 0;
    }
    
    .step-content {
        flex-grow: 1;
    }
    
    .formula-box {
        background: rgba(128, 0, 0, 0.2);
        border-left: 4px solid var(--primary-red);
        padding: 15px;
        margin: 10px 0;
        border-radius: 0 8px 8px 0;
        font-family: 'Courier New', monospace;
        font-weight: bold;
    }
    
    .inline-code {
        background: rgba(255, 255, 255, 0.1);
        padding: 2px 6px;
        border-radius: 4px;
        font-family: 'Courier New', monospace;
        font-size: 0.9rem;
    }
    
    /* Bit Repetition Styles */
    .bit-repetition {
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
        margin: 15px 0;
    }
    
    .bit-group {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 10px 15px;
        background: rgba(255, 255, 255, 0.05);
        border-radius: 8px;
    }
    
    .original-bit {
        background: var(--primary-red);
        color: white;
        width: 25px;
        height: 25px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
    }
    
    .repeated-bits {
        font-family: 'Courier New', monospace;
        font-weight: bold;
    }
    
    /* Result Box */
    .result-box {
        background: rgba(40, 167, 69, 0.2);
        border: 1px solid #28a745;
        border-radius: 8px;
        padding: 15px;
        margin: 10px 0;
    }
    
    .result-box code {
        font-size: 1.1rem;
        font-weight: bold;
        color: #28a745;
    }
    
    .result-note {
        font-size: 0.8rem;
        color: var(--text-muted);
        margin-top: 5px;
    }
    
    /* Bit Groups */
    .bit-groups {
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
        margin: 15px 0;
    }
    
    .bit-group-box {
        background: rgba(255, 255, 255, 0.05);
        padding: 12px;
        border-radius: 8px;
        border: 1px solid rgba(255, 255, 255, 0.1);
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    .group-label {
        font-weight: bold;
        color: var(--text-muted);
    }
    
    .incomplete {
        background: #ffc107;
        color: black;
        padding: 2px 6px;
        border-radius: 4px;
        font-size: 0.7rem;
        font-weight: bold;
    }
    
    /* Majority Voting */
    .majority-voting {
        display: flex;
        flex-direction: column;
        gap: 15px;
        margin: 15px 0;
    }
    
    .voting-group {
        background: rgba(255, 255, 255, 0.05);
        border-radius: 8px;
        overflow: hidden;
    }
    
    .voting-header {
        background: rgba(128, 0, 0, 0.3);
        padding: 12px 15px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 10px;
    }
    
    .counts {
        font-size: 0.8rem;
        color: var(--text-muted);
    }
    
    .voting-result {
        padding: 12px 15px;
    }
    
    .voting-result.success {
        background: rgba(40, 167, 69, 0.2);
        color: #28a745;
    }
    
    .voting-result.warning {
        background: rgba(255, 193, 7, 0.2);
        color: #ffc107;
    }
    
    /* Explanation Box */
    .explanation {
        background: rgba(128, 0, 0, 0.1);
        border-left: 4px solid var(--primary-red);
        padding: 20px;
        border-radius: 0 8px 8px 0;
        margin-top: 20px;
    }
    
    .explanation h4 {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 10px;
        color: var(--primary-red);
    }
    
    /* Responsive Design */
    @media (max-width: 768px) {
        .data-flow {
            flex-direction: column;
        }
        
        .flow-arrow {
            transform: rotate(90deg);
        }
        
        .bit-repetition, .bit-groups {
            flex-direction: column;
        }
        
        .voting-header {
            flex-direction: column;
            align-items: flex-start;
        }
        
        .card-header {
            flex-direction: column;
            gap: 10px;
            align-items: flex-start;
        }
    }
</style>

<script>
    // Tab navigation functionality
    document.addEventListener('DOMContentLoaded', function() {
        const navButtons = document.querySelectorAll('.nav-btn');
        const sections = document.querySelectorAll('.examples-section');
        
        navButtons.forEach(button => {
            button.addEventListener('click', function() {
                const target = this.getAttribute('data-target');
                
                // Update active button
                navButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
                
                // Show target section
                sections.forEach(section => {
                    section.classList.remove('active');
                    if (section.id === target) {
                        section.classList.add('active');
                    }
                });
            });
        });
        
        // Add interactive animations
        const steps = document.querySelectorAll('.step');
        steps.forEach((step, index) => {
            step.style.opacity = '0';
            step.style.transform = 'translateX(-20px)';
            step.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            
            setTimeout(() => {
                step.style.opacity = '1';
                step.style.transform = 'translateX(0)';
            }, index * 200);
        });
    });
</script>

<?php include('includes/footer.php'); ?>