<?php
// Redirect to the homepage if accessed directly
if (basename(__FILE__) == basename($_SERVER['PHP_SELF'])) {
    header("Location: index.php");
    exit;
}
?>

<section class="academic-background" id="academic">
    <style>
        /* Global Variables */
        :root {
            --primary-color: #0ef;
            --bg-color: #1f242d;
            --text-color: #fff;
            --secondary-bg-color: rgba(255, 255, 255, 0.05);
            --box-shadow: rgba(0, 239, 239, 0.1);
            --font-family: 'Arial', sans-serif;
        }

        body {
            font-family: var(--font-family);
            margin: 0;
            padding: 0;
            background-color: var(--bg-color);
            color: var(--text-color);
        }

        .academic-background {
            background-color: var(--bg-color);
            padding: 60px 10%;
            text-align: center;
        }

        .academic-background-title {
            font-size: 2.5rem;
            margin-bottom: 40px;
            text-transform: uppercase;
            letter-spacing: 2px;
            background: linear-gradient(to right, #ffffff, var(--primary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            position: relative;
            overflow: hidden;
        }

        .academic-classes {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .academic-class {
            background: var(--secondary-bg-color);
            padding: 20px;
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            position: relative;
            overflow: hidden;
            box-shadow: 0 5px 15px var(--box-shadow);
            transition: transform 0.4s, box-shadow 0.4s;
        }

        .academic-class:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2), 0 0 30px var(--box-shadow);
        }

        .academic-class h3 {
            font-size: 1.2rem;
            color: var(--primary-color);
            margin-bottom: 10px;
        }

        .academic-class h4 {
            font-size: 1.5rem;
            color: var(--text-color);
            font-weight: bold;
            margin-bottom: 10px;
        }

        .academic-class p, .academic-class ul {
            font-size: 1rem;
            line-height: 1.6;
            color: rgba(255, 255, 255, 0.8);
        }

        .academic-class ul {
            list-style: none;
            padding: 0;
            margin: 10px 0;
        }

        .academic-class ul li {
            margin-bottom: 8px;
            position: relative;
            padding-left: 20px;
        }

        .academic-class ul li::before {
            content: '•';
            position: absolute;
            left: 0;
            color: var(--primary-color);
            font-weight: bold;
        }

        .progress-bar-container {
            width: 100%;
            background: rgba(255, 255, 255, 0.1);
            height: 22px;
            border-radius: 11px;
            overflow: hidden;
            margin-top: 10px;
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.5);
        }

        .progress-bar {
            height: 100%;
            background: var(--primary-color);
            width: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--bg-color);
            font-size: 0.9rem;
            font-weight: bold;
            transition: width 1s ease-in-out;
        }

        .progress-bar[data-value="8.32"] {
            width: 83.2%;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .academic-background-title {
                font-size: 2rem;
            }

            .academic-class {
                padding: 15px;
            }
        }

        @media (max-width: 576px) {
            .academic-class h4 {
                font-size: 1.3rem;
            }

            .academic-class ul {
                font-size: 0.9rem;
            }
        }
    </style>

    <h2 class="academic-background-title">Academic Background</h2>

    <div class="academic-classes">
        <!-- High School -->
        <article class="academic-class">
            <h3>2017-2018</h3>
            <h4>High School (10th)</h4>
            <p><strong>School:</strong> M.S Memorial Public School</p>
            <p><strong>Subjects:</strong></p>
            <ul>
                <li>Mathematics</li>
                <li>Science</li>
                <li>English</li>
                <li>Social Science</li>
                <li>Sanskrit</li>
            </ul>
        </article>

        <!-- Higher Secondary -->
        <article class="academic-class">
            <h3>2019-2020</h3>
            <h4>Higher Secondary (12th)</h4>
            <p><strong>School:</strong> M.S Memorial Public School</p>
            <p><strong>Department:</strong> PCM Department</p>
            <p><strong>Subjects:</strong></p>
            <ul>
                <li>Physics</li>
                <li>Chemistry</li>
                <li>Mathematics</li>
                <li>English</li>
                <li>Physical Education</li>
            </ul>
        </article>

        <!-- College -->
        <article class="academic-class">
            <h3>2020-2024</h3>
            <h4>B.Tech in Computer Science</h4>
            <p><strong>College:</strong> Technocrats Institute Of Technology & Science</p>
            <p><strong>CGPA:</strong> 8.32</p>
            <div class="progress-bar-container">
                <div class="progress-bar" data-value="8.32">8.32 CGPA</div>
            </div>
        </article>
    </div>
</section>
