# Repeating Export for YNAB

**⚠️ SUNSET NOTICE: This project has been sunset and the live website will be taken down. The code is now open source under the MIT license.**

Export your repeating YNAB transactions into a CSV or Excel table.

## Overview

This application allows you to export your repeating YNAB transactions into various file formats for analysis and record-keeping. It integrates with YNAB's API to securely access your budget data and export repeating transactions.

## Features

- Export repeating transactions to CSV or Excel format
- Secure OAuth integration with YNAB
- No server-side data storage - all processing happens locally
- Simple and intuitive interface

## Technology Stack

- **Backend**: Laravel (PHP)
- **Frontend**: Blade templates with Tailwind CSS
- **Authentication**: YNAB OAuth
- **Data Processing**: Local processing with no server storage

## Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/YnabAddOns/repeatingexportforynab.git
   cd repeatingexportforynab
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Configure YNAB API**
   Add your YNAB API credentials to `.env`:
   ```env
   YNAB_CLIENT_ID=your_client_id
   YNAB_REDIRECT_URI=your_redirect_uri
   YNAB_REFERRAL_LINK=your_referral_link
   ```

5. **Start the development server**
   ```bash
   php artisan serve
   ```

## Usage

1. Visit the application in your browser
2. Authenticate with YNAB using the OAuth flow
3. Select your preferred file format (CSV or Excel)
4. Export your repeating transactions

## Privacy & Security

- No server-side data storage
- All data processing happens locally
- Secure OAuth integration with YNAB
- Transparent privacy practices

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
