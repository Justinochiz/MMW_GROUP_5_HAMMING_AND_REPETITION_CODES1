<?php include('includes/header.php'); ?>

<section style="background: linear-gradient(135deg, #0c0c0c 0%, #1a1a1a 50%, #2d1a1a 100%); min-height: 100vh; display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 60px 20px;">
    <div style="text-align: center; max-width: 1200px; width: 100%;">
        <h2 style="background: linear-gradient(135deg, #ff6b6b, #ff0000); -webkit-background-clip: text; -webkit-text-fill-color: transparent; margin-bottom: 10px; font-size: 2.5em;">Our Team Members</h2>
        <p style="margin-bottom: 50px; background: linear-gradient(135deg, #cccccc, #ffffff); -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-size: 1.1em;">
            These are the members of our group who contributed to the Modern Mathematics in the Modern World report.
        </p>

        <div class="team">
            <div class="member">
                <div class="profile-circle">
                    <img src="images/tin.jpg" alt="Tomon Justine O." class="profile-pic">
                </div>
                <h4>Tomon Justine O.</h4>
                <p>Member</p>
            </div>

            <div class="member">
                <div class="profile-circle">
                    <img src="images/shyr.jpg" alt="Shyr Nicole P. Belenzo" class="profile-pic">
                </div>
                <h4>Shyr Nicole P. Belenzo</h4>
                <p class="leader">Leader</p>
            </div>

            <div class="member">
                <div class="profile-circle">
                    <img src="images/adora.jpg" alt="Adora Joenabelle" class="profile-pic">
                </div>
                <h4>Adora Joenabelle</h4>
                <p>Member</p>
            </div>
            
            <div class="member">
                <div class="profile-circle">
                    <img src="images/jaz.png" alt="Jahzera Marie Carutcho" class="profile-pic">
                </div>
                <h4>Jahzera Marie Carutcho</h4>
                <p>Member</p>
            </div>
        </div>
    </div>
</section>

<style>
body {
    background: #000000;
    color: #ffffff;
    margin: 0;
    padding: 0;
}

.team {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 40px;
    margin: 0 auto;
    max-width: 1200px;
}

.member {
    text-align: center;
    width: 220px;
    padding: 25px 20px;
    border-radius: 15px;
    background: linear-gradient(135deg, #1a1a1a, #2a2a2a);
    box-shadow: 0 8px 25px rgba(255, 0, 0, 0.1);
    transition: all 0.3s ease;
    border: 1px solid #333;
    position: relative;
    overflow: hidden;
}

.member::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, transparent, rgba(255, 0, 0, 0.1), transparent);
    transition: left 0.5s ease;
}

.member:hover::before {
    left: 100%;
}

.member:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 35px rgba(255, 0, 0, 0.2);
    background: linear-gradient(135deg, #2a1a1a, #3a1a1a);
    border: 1px solid transparent;
    background-image: linear-gradient(135deg, #2a1a1a, #3a1a1a), 
                      linear-gradient(135deg, #ff0000, #ff6b6b);
    background-origin: border-box;
    background-clip: content-box, border-box;
}

.profile-circle {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    overflow: hidden;
    margin: 0 auto 20px;
    border: 3px solid #333;
    background: #1a1a1a;
    transition: all 0.3s ease;
    position: relative;
}

.member:hover .profile-circle {
    border: 3px solid transparent;
    background: linear-gradient(135deg, #1a1a1a, #1a1a1a), 
                linear-gradient(135deg, #ff0000, #ff6b6b);
    background-origin: border-box;
    background-clip: content-box, border-box;
    transform: scale(1.05);
}

.profile-pic {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 50%;
    transition: transform 0.3s ease;
}

.member:hover .profile-pic {
    transform: scale(1.1);
}

.member h4 {
    margin: 0 0 10px 0;
    color: #ffffff;
    font-size: 1.3em;
    font-weight: 600;
    transition: all 0.3s ease;
}

.member:hover h4 {
    background: linear-gradient(135deg, #ff6b6b, #ff0000);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.member p {
    color: #cccccc;
    font-size: 1em;
    font-weight: 500;
    margin: 0;
    transition: all 0.3s ease;
}

.member:hover p {
    background: linear-gradient(135deg, #ff9999, #ff6b6b);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.member .leader {
    color: #ff6b6b;
    font-weight: 600;
    font-size: 1.1em;
}

.member:hover .leader {
    background: linear-gradient(135deg, #ff0000, #ff4444);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-weight: 700;
}

/* Responsive design */
@media (max-width: 768px) {
    .team {
        gap: 25px;
        justify-content: center;
    }
    
    .member {
        width: 170px;
        padding: 20px 15px;
    }
    
    .profile-circle {
        width: 120px;
        height: 120px;
    }
    
    h2 {
        font-size: 2em !important;
    }
}

@media (max-width: 480px) {
    .team {
        gap: 20px;
    }
    
    .member {
        width: 140px;
        padding: 15px 10px;
    }
    
    .profile-circle {
        width: 100px;
        height: 100px;
    }
}

/* Glow animation for cards */
@keyframes glow {
    0% { box-shadow: 0 0 20px rgba(255, 0, 0, 0.1); }
    50% { box-shadow: 0 0 30px rgba(255, 0, 0, 0.2); }
    100% { box-shadow: 0 0 20px rgba(255, 0, 0, 0.1); }
}

.member {
    animation: glow 3s ease-in-out infinite;
}
</style>

<?php include('includes/footer.php'); ?>