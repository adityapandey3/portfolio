<?php
// Redirect to the homepage if accessed directly
if (basename(__FILE__) == basename($_SERVER['PHP_SELF'])) {
    header("Location: index.php");
    exit;
}
?>

<section class="skills-section" id="skills">
    <style>
        /* Global Styles */
        :root {
            --primary-color: #0ef;
            --background-color: #1f242d;
            --text-color: #fff;
            --secondary-bg-color: rgba(255, 255, 255, 0.05);
            --box-shadow-color: rgba(0, 239, 239, 0.1);
        }

        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: var(--background-color);
            color: var(--text-color);
        }

        .skills-section {
            padding: 60px 10%;
            display: flex;
            flex-direction: column;
            gap: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            background-color: var(--background-color);
        }

        .skills-title {
            text-align: center;
            font-size: 2.5rem;
            font-family: 'Brygada 1918', serif;
            margin-bottom: 20px;
            background: linear-gradient(to right, #ffffff, var(--primary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            transition: color 0.3s;
        }

        .skills-title:hover {
            color: var(--primary-color);
        }

        .skills-container {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            justify-content: space-between;
        }

        .skills-card {
            flex: 1;
            max-width: 45%;
            background: var(--secondary-bg-color);
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 5px 15px var(--box-shadow-color);
            animation: fadeIn 1s ease;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .skills-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 239, 239, 0.2);
        }

        .skills-card h3 {
            font-size: 1.5rem;
            color: var(--primary-color);
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px 8px;
            text-align: left;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        th {
            color: var(--primary-color);
            font-weight: 600;
        }

        td {
            color: var(--text-color);
        }

        .skills-bar-container {
            margin-bottom: 10px;
        }

        .skills-bar {
            width: 100%;
            height: 22px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 11px;
            overflow: hidden;
            position: relative;
        }

        .skills-bar-fill {
            height: 100%;
            background: var(--primary-color);
            border-radius: 11px;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            padding-right: 10px;
            font-size: 0.9rem;
            color: var(--background-color);
            font-weight: 600;
            transition: width 0.5s ease;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .skills-container {
                flex-direction: column;
                gap: 20px;
            }

            .skills-card {
                max-width: 100%;
            }
        }
    </style>

    <h2 class="skills-title">My Personal Info & Skills</h2>

    <div class="skills-container">
        <!-- Personal Info -->
        <article class="skills-card" aria-labelledby="personal-info-title">
            <h3 id="personal-info-title">Personal Info</h3>
            <table aria-label="Personal Information">
                <tr>
                    <th>Name:</th>
                    <td>Adarsh Kumar</td>
                </tr>
                <tr>
                    <th>Date Of Birth:</th>
                    <td>25 Jan 2003</td>
                </tr>
                <tr>
                    <th>Age:</th>
                    <td>21</td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td>adarshkumar2933@gmail.com</td>
                </tr>
                <tr>
                    <th>Degree:</th>
                    <td>B. Tech</td>
                </tr>
                <tr>
                    <th>Phone no.:</th>
                    <td>+91 7611169158</td>
                </tr>
                <tr>
                    <th>Employment-type:</th>
                    <td>Fresher</td>
                </tr>
                <tr>
                    <th>Current City:</th>
                    <td>Bengaluru</td>
                </tr>
            </table>
        </article>

        <!-- Technical Skills -->
        <article class="skills-card" aria-labelledby="technical-skills-title">
            <h3 id="technical-skills-title">Technical Skills</h3>
            <div class="skills-bar-container">
                <p>HTML</p>
                <div class="skills-bar">
                    <div class="skills-bar-fill" style="width: 95%;">95%</div>
                </div>
            </div>
            <div class="skills-bar-container">
                <p>CSS</p>
                <div class="skills-bar">
                    <div class="skills-bar-fill" style="width: 90%;">90%</div>
                </div>
            </div>
            <div class="skills-bar-container">
                <p>JavaScript</p>
                <div class="skills-bar">
                    <div class="skills-bar-fill" style="width: 80%;">80%</div>
                </div>
            </div>
            <div class="skills-bar-container">
                <p>Java</p>
                <div class="skills-bar">
                    <div class="skills-bar-fill" style="width: 75%;">75%</div>
                </div>
            </div>
            <div class="skills-bar-container">
                <p>MySQL</p>
                <div class="skills-bar">
                    <div class="skills-bar-fill" style="width: 85%;">85%</div>
                </div>
            </div>
        </article>

        <!-- Professional Skills -->
        <article class="skills-card" aria-labelledby="professional-skills-title">
            <h3 id="professional-skills-title">Professional Skills</h3>
            <div class="skills-bar-container">
                <p>Communication</p>
                <div class="skills-bar">
                    <div class="skills-bar-fill" style="width: 75%;">75%</div>
                </div>
            </div>
            <div class="skills-bar-container">
                <p>Teamwork</p>
                <div class="skills-bar">
                    <div class="skills-bar-fill" style="width: 95%;">95%</div>
                </div>
            </div>
            <div class="skills-bar-container">
                <p>Project Management</p>
                <div class="skills-bar">
                    <div class="skills-bar-fill" style="width: 65%;">65%</div>
                </div>
            </div>
            <div class="skills-bar-container">
                <p>Creativity</p>
                <div class="skills-bar">
                    <div class="skills-bar-fill" style="width: 90%;">90%</div>
                </div>
            </div>
            <div class="skills-bar-container">
                <p>Team Management</p>
                <div class="skills-bar">
                    <div class="skills-bar-fill" style="width: 90%;">90%</div>
                </div>
            </div>
        </article>
    </div>
</section>
