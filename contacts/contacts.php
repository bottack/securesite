<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css">
    <title>Comments</title>
</head>
<body>
    <div id="form_block">
        <h5 id="tag">Please leave your details below</h5>
        <form class="php-form" action="contacts_connection.php" method="post">
            <table class="php-table">
                <tr class="php-tr">
                    <td class="php-td"><label class="php-label">First Name:</label></td>
                    <td class="php-td"><input id="first_name" class="php-input" name="first_name" type="text" autocomplete="off" required></td>
                </tr>
                <tr class="php-tr">
                    <td class="php-td"><label class="php-label">Last Name:</label></td>
                    <td class="php-td"><input id="last_name" class="php-input" name="last_name" autocomplete="off" required></input></td>
                </tr>
                <tr class="php-tr">
                    <td class="php-td"><label class="php-label">Phone Number:</label></td>
                    <td class="php-td"><input id="phone" class="php-input" name="phone" autocomplete="off" required></input></td>
                </tr>
                <tr class="php-tr">
                    <td class="php-td"><label class="php-label">Email Address:</label></td>
                    <td class="php-td"><input id="email" class="php-input" name="email" autocomplete="off" required></input></td>
                </tr>
                <tr class="php-tr">
                    <td class="php-td"><label class="php-label">Message Subject</label></td>
                    <td class="php-td"><input id="subject" class="php-input" name="subject" autocomplete="off" required></input></td>
                </tr>
                <tr class="php-tr">
                    <td class="php-td"><label class="php-label">Message</label></td>
                    <td class="php-td"><textarea id="message" class="php-textarea" name="message" autocomplete="off" required></textarea></td>
                </tr>
            </table>
            <button type="submit" class="php-button">Submit</button>
        </form>
    </div>
</body>
