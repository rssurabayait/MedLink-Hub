# MedLink Hub 🏥

<p align="center">
  <strong>Medical Link Hub - Connecting Healthcare Information Seamlessly</strong>
</p>

## 📋 Requirements

Before you begin, ensure you have the following installed on your system:

- **PHP** `^8.2` - Latest PHP version with modern features
- **OCI** `8` - Oracle PHP Extension 
- **PostgreSQL** - Robust database for medical data storage
- **Composer** - PHP dependency manager
- **Git** - Version control system

## 🛠️ Installation

Follow these simple steps to get MedLink Hub up and running:

### 1. Clone the Repository
```bash
git clone https://github.com/your-username/medlink-hub.git
cd medlink-hub
```

### 2. Environment Configuration
```bash
cp .env.example .env
```

### 3. Install Dependencies
```bash
composer install
```

### 4. Database Setup
Configure `.env` file:
### 5. Run Database Migrations
```bash
php artisan migrate
```

### 6. Start the Application
```bash
php artisan serve
```

Your MedLink Hub application will be available at `http://localhost:8000`


## 📖 Commit Guidelines

For comprehensive commit guidelines and best practices, please refer to our detailed documentation:

### Commit Structure
```
<type>(<scope>)[!]: <description>
```

### Rules & Constraints
- **Message length**: Maximum 72 characters
- **Description**: Minimum 16 characters, maximum 50 characters
- **Format**: Lowercase, no trailing spaces or periods
- **Breaking changes**: Use `!` after scope for breaking changes

### Additional Commit Types
- **`refactor:`** - Code restructuring
- **`perf:`** - Performance improvements
- **`style:`** - Formatting changes
- **`test:`** - Test additions or corrections
- **`chore:`** - Build process or tool changes
- **`remove:`** - Feature or file removal
- **`revert:`** - Commit reversions

### Examples
```bash
# Standard commit
fix(patient/records): resolve duplicate entry issue

# Breaking change
remove(api/v1)!: remove deprecated v1 endpoints

# Multiple scopes
feat(user-auth): implement two-factor authentication
```
