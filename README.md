# DynamoDB_P2

This is a PHP-based web application integrated with AWS DynamoDB for guest list management. It demonstrates how to build and deploy a modern web app using PHP, Docker and AWS services such as DynamoDB, while also including infrastructure management via Terraform.

## Project Overview

**DynamoDB_P2** provides an interface for managing guest entries through a simple login system and a web UI. It's designed to run in containerized environments, making it easy to deploy and scale. The infrastructure-as-code setup is handled using Terraform.

---

## Technologies Used

- **PHP** – Backend 
- **HTML/CSS** – Frontend
- **Docker** – Containerization
- **AWS DynamoDB** – NoSQL database
- **Terraform** – Infrastructure as code
- **Composer** – Dependency management

---

## Project Structure

```
├── .gitignore            # Git ignored files
├── composer.json         # PHP dependency manager config
├── composer.lock         # Locked versions of dependencies
├── dockerfile            # Instructions for Docker build
├── guestlist.php         # Main app functionality for managing guests
├── index.html            # Frontend landing page
├── login.php             # User login functionality
├── styles.css            # Stylesheet for frontend
├── terra/                # Terraform infrastructure setup
└── vendor/               # Composer dependencies
```

---

## Getting Started

### Prerequisites

- Docker
- AWS CLI with configured credentials
- PHP & Composer
- Access to AWS DynamoDB

---

### Installation

1. **Clone the repository**

```bash
git clone https://github.com/Nicholina1/dynamodb_P2.git
cd dynamodb_P2
```

2. **Install dependencies**

```bash
composer install
```

3. **Configure AWS credentials**

Ensure your environment has access to AWS services:

```bash
export AWS_ACCESS_KEY_ID=your_key
export AWS_SECRET_ACCESS_KEY=your_secret
export AWS_DEFAULT_REGION=your_region
```

---

### Docker Build and Run

Build the image:

```bash
docker build -t dynamodb_p2 .
```

Run the container:

```bash
docker run -p 8080:80 dynamodb_p2
```

Access via [http://localhost:8080](http://localhost:8080)

---

## Functionality

- **Login Page (`login.php`)** – Simulates basic login mechanism.
- **Guest List (`guestlist.php`)** – Interacts with DynamoDB to list, add or modify guests.
- **Styling (`styles.css`)** – Custom CSS for layout and design.

---

## Infrastructure

The `terra/` directory includes Terraform scripts to provision necessary AWS resources such as:

- DynamoDB table
- IAM roles/policies
- VPC, security groups, etc.

Run Terraform from the `terra/` directory:

```bash
cd terra
terraform init
terraform apply
```

Make sure your AWS credentials are exported before applying the infrastructure.

---

## License

This project is open-source and available under the [MIT License](LICENSE).

---
