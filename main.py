import smtplib
from email.mime.text import MIMEText


def check_gmail_credentials(email, password):
    try:
        print("Connecting to Gmail SMTP server...")
        with smtplib.SMTP_SSL('smtp.gmail.com', 465) as smtp_server:
            smtp_server.login(email, password)
            print("Credentials are valid!")
        return True
    except smtplib.SMTPAuthenticationError:
        print("Invalid credentials! Please check your email or password.")
        return False
    except Exception as e:
        print(f"An error occurred: {e}")
        return False


def send_email(subject, body, sender, recipients, password):
    try:
        msg = MIMEText(body)
        msg['Subject'] = subject
        msg['From'] = sender
        msg['To'] = ', '.join(recipients)

        with smtplib.SMTP_SSL('smtp.gmail.com', 465) as smtp_server:
            smtp_server.login(sender, password)
            smtp_server.sendmail(sender, recipients, msg.as_string())
            print("Message sent successfully!")
    except Exception as e:
        print(f"An error occurred while sending the email: {e}")


# Input credentials and details
email = "sender "
password = "app passkey"

if check_gmail_credentials(email, password):
    subject = "Enter the email subject: "
    body = "Enter the email body: "
    recipient = "receiver email"

    # Send the email
    send_email(subject, body, email, [recipient], password)
else:
    print("Please fix your credentials and try again.")
