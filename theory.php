<?php include('includes/header.php'); ?>

<div class="hero-section">
    <div class="hero-content">
        <h1 class="hero-title animate-fade-in">Theory & Fundamentals</h1>
        <p class="hero-subtitle animate-fade-in-delay">
            Understanding the mathematical foundations of error detection and correction
        </p>
    </div>
    <div class="hero-background">
        <div class="floating-shape shape-1"></div>
        <div class="floating-shape shape-2"></div>
        <div class="floating-shape shape-3"></div>
    </div>
</div>

<div class="container">
    <div class="theory-content">
        <div class="theory-intro">
            <div class="intro-text">
                <h2>The Foundation of Error Correction</h2>
                <p>
                    In any digital communication system, data is transmitted as binary digits (0s and 1s). 
                    During transmission, external factors like noise, interference, or signal degradation 
                    can alter some bits, resulting in errors that corrupt the original message.
                </p>
                <p>
                    Error detection and correction codes are sophisticated mathematical techniques that 
                    help identify and fix these errors, ensuring reliable data transmission across 
                    unreliable communication channels.
                </p>
            </div>
            
            <div class="theory-visual">
                <div class="transmission-flow">
                    <div class="flow-step">
                        <div class="step-icon">📤</div>
                        <div class="step-content">
                            <h4>Transmit</h4>
                            <p>Data sent as binary bits</p>
                        </div>
                    </div>
                    <div class="flow-arrow">→</div>
                    <div class="flow-step error-step">
                        <div class="step-icon">⚡</div>
                        <div class="step-content">
                            <h4>Noise & Errors</h4>
                            <p>Bits may get corrupted</p>
                        </div>
                    </div>
                    <div class="flow-arrow">→</div>
                    <div class="flow-step">
                        <div class="step-icon">🛡️</div>
                        <div class="step-content">
                            <h4>Protect</h4>
                            <p>Error codes add protection</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="theory-grid">
            <!-- Repetition Code Card -->
            <div class="theory-card repetition-card animate-card">
                <div class="card-header">
                    <div class="card-icon">🔁</div>
                    <h3>Repetition Code</h3>
                    <span class="difficulty-badge">Basic</span>
                </div>
                <div class="card-content">
                    <p class="card-description">
                        The simplest method of error correction where each bit is repeated multiple times 
                        to create redundancy in the transmitted data.
                    </p>
                    
                    <div class="concept-demo">
                        <div class="demo-title">How it works:</div>
                        <div class="bit-demo">
                            <div class="original-data">
                                <span class="demo-label">Original:</span>
                                <div class="bits">
                                    <div class="bit">1</div>
                                    <div class="bit">0</div>
                                    <div class="bit">1</div>
                                </div>
                            </div>
                            <div class="arrow">→</div>
                            <div class="encoded-data">
                                <span class="demo-label">Encoded (r=3):</span>
                                <div class="bits">
                                    <div class="bit repeated">1</div>
                                    <div class="bit repeated">1</div>
                                    <div class="bit repeated">1</div>
                                    <div class="bit repeated zero">0</div>
                                    <div class="bit repeated zero">0</div>
                                    <div class="bit repeated zero">0</div>
                                    <div class="bit repeated">1</div>
                                    <div class="bit repeated">1</div>
                                    <div class="bit repeated">1</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="key-features">
                        <h4>Key Features:</h4>
                        <ul>
                            <li><strong>Simple Implementation:</strong> Easy to understand and implement</li>
                            <li><strong>Majority Voting:</strong> Uses majority rule to correct errors</li>
                            <li><strong>High Redundancy:</strong> Significant overhead for strong protection</li>
                            <li><strong>Limited Efficiency:</strong> Not suitable for large data volumes</li>
                        </ul>
                    </div>

                    <div class="example-scenario">
                        <h4>Example Scenario:</h4>
                        <p>If we send "1" as "111" and receive "110", the system corrects it to "1" using majority voting (two 1s vs one 0).</p>
                    </div>
                </div>
            </div>

            <!-- Hamming Code Card -->
            <div class="theory-card hamming-card animate-card">
                <div class="card-header">
                    <div class="card-icon">💡</div>
                    <h3>Hamming Code</h3>
                    <span class="difficulty-badge">Advanced</span>
                </div>
                <div class="card-content">
                    <div class="inventor-info">
                        <div class="inventor-avatar">RH</div>
                        <div class="inventor-details">
                            <strong>Richard Hamming</strong>
                            <span>Invented in 1950</span>
                        </div>
                    </div>

                    <p class="card-description">
                        A sophisticated error-correcting code that adds strategic parity bits at specific 
                        positions to detect and correct single-bit errors efficiently.
                    </p>

                    <div class="concept-demo">
                        <div class="demo-title">How it works:</div>
                        <div class="hamming-demo">
                            <div class="data-bits">
                                <span class="demo-label">Data Bits:</span>
                                <div class="bits">
                                    <div class="bit data">1</div>
                                    <div class="bit data">0</div>
                                    <div class="bit data">1</div>
                                    <div class="bit data">1</div>
                                </div>
                            </div>
                            <div class="arrow">→</div>
                            <div class="encoded-hamming">
                                <span class="demo-label">Hamming(7,4):</span>
                                <div class="bits">
                                    <div class="bit parity">P1</div>
                                    <div class="bit parity">P2</div>
                                    <div class="bit data">1</div>
                                    <div class="bit parity">P4</div>
                                    <div class="bit data">0</div>
                                    <div class="bit data">1</div>
                                    <div class="bit data">1</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="key-features">
                        <h4>Key Features:</h4>
                        <ul>
                            <li><strong>Efficient:</strong> Lower redundancy compared to repetition codes</li>
                            <li><strong>Single-bit Correction:</strong> Can detect and correct single-bit errors</li>
                            <li><strong>Double-bit Detection:</strong> Can detect (but not correct) two-bit errors</li>
                            <li><strong>Strategic Parity:</strong> Parity bits at power-of-2 positions</li>
                        </ul>
                    </div>

                    <div class="mathematical-basis">
                        <h4>Mathematical Basis:</h4>
                        <div class="formula">
                            2<sup>p</sup> ≥ n + p + 1
                        </div>
                        <p class="formula-explanation">
                            Where <strong>p</strong> is the number of parity bits and <strong>n</strong> is the number of data bits.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="comparison-section">
            <h2 class="section-title">Comparison: Repetition vs Hamming Codes</h2>
            <div class="comparison-table">
                <div class="table-header">
                    <div class="feature-column">Feature</div>
                    <div class="repetition-column">Repetition Code</div>
                    <div class="hamming-column">Hamming Code</div>
                </div>
                <div class="table-row">
                    <div class="feature-column">Complexity</div>
                    <div class="repetition-column">Simple</div>
                    <div class="hamming-column">Moderate</div>
                </div>
                <div class="table-row">
                    <div class="feature-column">Redundancy</div>
                    <div class="repetition-column">High</div>
                    <div class="hamming-column">Low</div>
                </div>
                <div class="table-row">
                    <div class="feature-column">Error Correction</div>
                    <div class="repetition-column">Multiple bits</div>
                    <div class="hamming-column">Single bit</div>
                </div>
                <div class="table-row">
                    <div class="feature-column">Efficiency</div>
                    <div class="repetition-column">Low</div>
                    <div class="hamming-column">High</div>
                </div>
                <div class="table-row">
                    <div class="feature-column">Use Cases</div>
                    <div class="repetition-column">Simple systems</div>
                    <div class="hamming-column">Modern computing</div>
                </div>
            </div>
        </div>

        <div class="applications-section">
            <h2 class="section-title">Real-World Applications</h2>
            <div class="applications-grid">
                <div class="application-item">
                    <div class="app-icon">💾</div>
                    <h4>Computer Memory</h4>
                    <p>ECC RAM uses Hamming codes to protect against data corruption</p>
                </div>
                <div class="application-item">
                    <div class="app-icon">📡</div>
                    <h4>Satellite Communication</h4>
                    <p>Ensures reliable data transmission from space</p>
                </div>
                <div class="application-item">
                    <div class="app-icon">🔗</div>
                    <h4>Networking</h4>
                    <p>Used in various network protocols for error control</p>
                </div>
                <div class="application-item">
                    <div class="app-icon">💿</div>
                    <h4>Data Storage</h4>
                    <p>Protects data on CDs, DVDs, and other storage media</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .theory-content {
        padding: 40px 0;
    }

    .theory-intro {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 50px;
        align-items: center;
        margin-bottom: 60px;
        padding: 40px;
        background: var(--card-bg);
        border-radius: 20px;
        box-shadow: var(--shadow);
    }

    .intro-text h2 {
        color: var(--text-light);
        margin-bottom: 25px;
        font-size: 2.2rem;
        border-left: 4px solid var(--primary-red);
        padding-left: 15px;
    }

    .intro-text p {
        color: var(--text-muted);
        margin-bottom: 20px;
        font-size: 1.1rem;
        line-height: 1.7;
    }

    .transmission-flow {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 15px;
    }

    .flow-step {
        text-align: center;
        padding: 20px;
        background: rgba(255, 255, 255, 0.05);
        border-radius: 15px;
        min-width: 120px;
        transition: var(--transition);
    }

    .flow-step:hover {
        background: rgba(160, 0, 0, 0.1);
        transform: translateY(-5px);
    }

    .error-step {
        background: rgba(220, 53, 69, 0.1);
        border: 1px solid rgba(220, 53, 69, 0.3);
    }

    .step-icon {
        font-size: 2rem;
        margin-bottom: 10px;
    }

    .flow-step h4 {
        color: var(--text-light);
        margin-bottom: 5px;
        font-size: 1rem;
    }

    .flow-step p {
        color: var(--text-muted);
        font-size: 0.9rem;
        margin: 0;
    }

    .flow-arrow {
        color: var(--primary-red);
        font-size: 1.5rem;
        font-weight: bold;
    }

    .theory-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
        margin-bottom: 60px;
    }

    .theory-card {
        background: var(--card-bg);
        border-radius: 20px;
        overflow: hidden;
        box-shadow: var(--shadow);
        transition: var(--transition);
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .theory-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.4);
    }

    .repetition-card {
        border-top: 4px solid var(--accent-green);
    }

    .hamming-card {
        border-top: 4px solid var(--primary-red);
    }

    .card-header {
        padding: 25px 30px 20px;
        display: flex;
        align-items: center;
        gap: 15px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .card-icon {
        font-size: 2rem;
    }

    .card-header h3 {
        margin: 0;
        flex: 1;
        color: var(--text-light);
        font-size: 1.5rem;
    }

    .difficulty-badge {
        background: var(--primary-red);
        color: white;
        padding: 5px 12px;
        border-radius: 15px;
        font-size: 0.8rem;
        font-weight: 600;
    }

    .card-content {
        padding: 30px;
    }

    .card-description {
        color: var(--text-muted);
        margin-bottom: 25px;
        font-size: 1.1rem;
        line-height: 1.6;
    }

    .concept-demo {
        margin: 25px 0;
        padding: 20px;
        background: rgba(255, 255, 255, 0.05);
        border-radius: 10px;
    }

    .demo-title {
        color: var(--text-light);
        font-weight: 600;
        margin-bottom: 15px;
        font-size: 1rem;
    }

    .bit-demo, .hamming-demo {
        display: flex;
        align-items: center;
        gap: 15px;
        flex-wrap: wrap;
    }

    .original-data, .encoded-data, .data-bits, .encoded-hamming {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .demo-label {
        color: var(--text-muted);
        font-size: 0.9rem;
        font-weight: 500;
    }

    .bits {
        display: flex;
        gap: 5px;
    }

    .bit {
        width: 35px;
        height: 35px;
        background: var(--primary-red);
        color: white;
        border-radius: 6px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-family: 'Courier New', monospace;
        font-size: 0.9rem;
    }

    .bit.zero {
        background: var(--accent-green);
    }

    .bit.repeated {
        background: var(--light-red);
    }

    .bit.data {
        background: var(--primary-red);
    }

    .bit.parity {
        background: #6f42c1;
    }

    .arrow {
        color: var(--primary-red);
        font-weight: bold;
        font-size: 1.2rem;
    }

    .key-features {
        margin: 25px 0;
    }

    .key-features h4 {
        color: var(--text-light);
        margin-bottom: 15px;
        font-size: 1.1rem;
    }

    .key-features ul {
        list-style: none;
        padding: 0;
    }

    .key-features li {
        color: var(--text-muted);
        margin-bottom: 8px;
        padding-left: 20px;
        position: relative;
    }

    .key-features li::before {
        content: '✓';
        position: absolute;
        left: 0;
        color: var(--accent-green);
        font-weight: bold;
    }

    .example-scenario {
        background: rgba(40, 167, 69, 0.1);
        padding: 20px;
        border-radius: 10px;
        border-left: 4px solid var(--accent-green);
    }

    .example-scenario h4 {
        color: var(--text-light);
        margin-bottom: 10px;
        font-size: 1.1rem;
    }

    .example-scenario p {
        color: var(--text-muted);
        margin: 0;
        font-size: 0.95rem;
    }

    .inventor-info {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 20px;
        padding: 15px;
        background: rgba(160, 0, 0, 0.1);
        border-radius: 10px;
    }

    .inventor-avatar {
        width: 50px;
        height: 50px;
        background: var(--primary-red);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 1.2rem;
    }

    .inventor-details {
        display: flex;
        flex-direction: column;
    }

    .inventor-details strong {
        color: var(--text-light);
        font-size: 1.1rem;
    }

    .inventor-details span {
        color: var(--text-muted);
        font-size: 0.9rem;
    }

    .mathematical-basis {
        text-align: center;
        margin-top: 25px;
        padding: 20px;
        background: rgba(160, 0, 0, 0.1);
        border-radius: 10px;
    }

    .formula {
        font-size: 2rem;
        font-weight: bold;
        color: var(--primary-red);
        margin: 15px 0;
        font-family: 'Courier New', monospace;
    }

    .formula-explanation {
        color: var(--text-muted);
        font-size: 0.9rem;
        margin: 0;
    }

    .comparison-section {
        margin-bottom: 60px;
    }

    .section-title {
        text-align: center;
        color: var(--text-light);
        margin-bottom: 40px;
        font-size: 2rem;
        position: relative;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 4px;
        background: var(--primary-red);
        border-radius: 2px;
    }

    .comparison-table {
        background: var(--card-bg);
        border-radius: 15px;
        overflow: hidden;
        box-shadow: var(--shadow);
    }

    .table-header {
        display: grid;
        grid-template-columns: 2fr 1fr 1fr;
        background: var(--primary-red);
        color: white;
        font-weight: 600;
        padding: 20px;
    }

    .table-row {
        display: grid;
        grid-template-columns: 2fr 1fr 1fr;
        padding: 15px 20px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        transition: var(--transition);
    }

    .table-row:hover {
        background: rgba(255, 255, 255, 0.05);
    }

    .table-row:last-child {
        border-bottom: none;
    }

    .feature-column {
        color: var(--text-light);
        font-weight: 500;
    }

    .repetition-column {
        color: var(--accent-green);
        font-weight: 500;
    }

    .hamming-column {
        color: var(--primary-red);
        font-weight: 500;
    }

    .applications-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 25px;
    }

    .application-item {
        background: var(--card-bg);
        padding: 30px;
        border-radius: 15px;
        text-align: center;
        transition: var(--transition);
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .application-item:hover {
        transform: translateY(-5px);
        background: rgba(160, 0, 0, 0.1);
        border-color: var(--primary-red);
    }

    .app-icon {
        font-size: 2.5rem;
        margin-bottom: 15px;
    }

    .application-item h4 {
        color: var(--text-light);
        margin-bottom: 10px;
        font-size: 1.2rem;
    }

    .application-item p {
        color: var(--text-muted);
        margin: 0;
        font-size: 0.9rem;
        line-height: 1.5;
    }

    /* Responsive Design */
    @media (max-width: 968px) {
        .theory-intro {
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .theory-grid {
            grid-template-columns: 1fr;
        }

        .transmission-flow {
            flex-direction: column;
            gap: 10px;
        }

        .flow-arrow {
            transform: rotate(90deg);
        }
    }

    @media (max-width: 768px) {
        .theory-intro {
            padding: 25px;
        }

        .table-header, .table-row {
            grid-template-columns: 1fr;
            gap: 10px;
            text-align: center;
        }

        .bit-demo, .hamming-demo {
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
        }

        .applications-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<?php include('includes/footer.php'); ?>