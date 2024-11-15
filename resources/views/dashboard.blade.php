<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        /* Layout globale */
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            color: #1f2937;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 1rem;
            text-align: center;
        }

        header h2 {
            font-size: 1.25rem;
            font-weight: 600;
            color: #1f2937;
            margin: 0;
        }

        .container {
            max-width: 1120px;
            margin: 3rem auto;
            padding: 0 1rem;
        }

        .card {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .card-header {
            padding: 1rem;
            font-size: 1rem;
            color: #4b5563;
            font-weight: 500;
            border-bottom: 1px solid #e5e7eb;
        }

        .card-body {
            padding: 1.5rem;
            font-size: 1rem;
            color: #1f2937;
        }
    </style>
</head>

<body>

    <header>
        <h2>Dashboard</h2>
    </header>

    <div class="container">
        <div class="card">
            <div class="card-header">
                Welcome
            </div>
            <div class="card-body">
                You're logged in!
            </div>
        </div>
    </div>

</body>

</html>
