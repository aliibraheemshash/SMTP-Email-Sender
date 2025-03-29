# SMTP-Email-Sender

![Python](https://img.shields.io/badge/Python-3.x-blue)
![MIT License](https://img.shields.io/badge/License-MIT-green)

This project allows you to send emails via Gmail's SMTP server using Python. It ensures security by utilizing Gmail's **App Passwords** for authentication.

## 🚀 Prerequisites

- **`smtplib`** and **`email`** libraries (these are included with Python by default).

- **Python 3.x** installed.
- A Gmail account with **2-Step Verification (2SV)** enabled.
- An **App Password** created for your Gmail account.

## 🛠️ Setup Instructions

### Step 1: Enable 2-Step Verification (2SV)

1. Go to your [Google Account Security](https://myaccount.google.com/security) page.
2. Under "Signing in to Google," enable **2-Step Verification** if not already activated.

### Step 2: Create an App Password

1. After activating 2SV, type **"App Passwords"** in the Google account search bar.
2. Select the result under the **Security** section.
3. Under "Select app," choose **Mail**.
4. Under "Select device," choose **Other (Custom name)** and enter a name like "SMTP Script".
5. Click **Generate** and copy the password shown in the yellow box — **save this securely**.

### Step 3: Configuration

1. Clone this repository:
   ```bash
   git clone https://github.com/yourusername/SMTP_Email_Sender.git
   cd SMTP_Email_Sender
   ```
2. Install dependencies (if any).
3. Edit `main.py`:
   ```python
   email = "your_email@gmail.com"  # Change to your Gmail address
   password = "your_app_password"  # Change to your saved App Password
   ```

### Step 4: Add Recipients

- Create a file named `recipients.txt` in the root folder.
- Add email addresses in this format:

```
example1@gmail.com
example2@yahoo.com
example3@outlook.com
```

### Step 5: Run the Script

To send your email:
```bash
python main.py
```

## ⚠️ Important Notes

- Avoid hardcoding your app password directly in code. Instead, consider using environment variables for improved security.
- Ensure your Gmail settings allow secure app access.


