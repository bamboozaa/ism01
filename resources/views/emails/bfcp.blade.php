<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bachelor Foundation Certificate Program (BFCP)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            color: #333;
        }

        .header {
            background-color: #f4f4f4;
            padding: 10px;
            text-align: center;
            margin-bottom: 20px;
        }

        .contact-info {
            margin-top: 20px;
            font-style: italic;
        }

        .program-details,
        .tuition-fees {
            background-color: #f9f9f9;
            padding: 15px;
            border-left: 4px solid #007bff;
            margin-bottom: 15px;
        }

        .signature {
            margin-top: 30px;
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Thank You for Your Inquiry</h1>
            <h2>Bachelor Foundation Certificate Program (BFCP)</h2>
        </div>

        <p>Dear {{ $testMailData['name'] }},</p>

        <p>Thank you for your interest in the Bachelor Foundation Certificate Program (BFCP) at the International School
            of Management (ISM), University of the Thai Chamber of Commerce (UTCC).</p>

        <p>The BFCP is designed to prepare students for entry into UTCC ISM's undergraduate programs. This program
            includes the following three subjects:</p>

        <ul>
            <li>GE055: Speaking and Presentation Skills</li>
            <li>GE084: Thai Language and Culture</li>
            <li>IB102: Business Organizations Management</li>
        </ul>

        <p>Upon successful completion, students will be fully eligible to transfer into UTCC ISM's undergraduate
            programs. The program also includes company visits, health insurance, and Ed-Visa documents. A certificate
            and transcript will be provided.</p>

        <div class="program-details">
            <h3>Program Details</h3>
            <h4>Qualifications:</h4>
            <ul>
                <li>Age: 16 years and above</li>
                <li>Completed High School</li>
                <li>GED, IGCSE, or equivalent</li>
            </ul>
            <p><strong>Duration:</strong> 13 May 2025 - 30 July 2025</p>
        </div>

        <div class="tuition-fees">
            <h3>Tuition Fees</h3>
            <ul>
                <li>Thai Students: 55,850 THB</li>
                <li>Foreign Students: 67,150 THB</li>
            </ul>
        </div>

        <h3>Application Process and Required Documents</h3>

        <p>To apply, please submit the following documents:</p>

        <ul>
            <li>High School Certificate or equivalent (Original Language and English version)</li>
            <li>High School Transcript or equivalent (Original Language and English version)</li>
            <li>English proficiency score (if available)</li>
            <li>A copy of your passport</li>
        </ul>

        <p>If you are interested in transferring to an undergraduate program or would like more detailed information
            about the program, including tuition fees for BFCP and undergraduate programs, please let us know. We will
            be happy to send detailed information to you.</p>

        <p>Please ensure that all required documents are submitted to <strong>ism@utcc.ac.th</strong>. Once we receive
            your application, we will contact you with further instructions.</p>

        <p>Should you have any questions or need assistance with the application process, feel free to reply to this
            email. We are happy to help!</p>

        <div class="signature">
            <p>Best regards,<br>
                ISM Admissions Team<br>
                International School of Management<br>
                University of the Thai Chamber of Commerce</p>
        </div>

        <div class="contact-info">
            <p>Contact: ism@utcc.ac.th</p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
