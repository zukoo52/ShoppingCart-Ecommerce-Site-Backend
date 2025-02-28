
# 🛒 **Shopping Cart System - Backend**  

![Shopping Cart System Logo](https://github.com/user-attachments/assets/5ffc5adf-5259-4bfd-9cd3-a07d1d8c2d6c)  

🚀 **Backend for a modern e-commerce platform** built using **Laravel**, providing features like **authentication, product management, cart functionality, and order processing**. This project is designed to work seamlessly with the frontend counterpart to provide a full-stack shopping cart system.  

🔗 **GitHub Repository:** [ShoppingCart-Ecommerce-Site-Backend](https://github.com/zukoo52/ShoppingCart-Ecommerce-Site-Backend.git)  

---

## **🎨 Project Overview**  

This backend system is built with **Laravel** and provides the necessary endpoints for user authentication, product management, cart management, and order processing. It's designed to work seamlessly with the frontend built using **Vue.js**.

> **Features** include user registration and login, product handling, cart management, order processing, and more.

---

## **📌 Features**  

### **🔑 Authentication**  
✅ User Registration & Login  
✅ JWT Authentication  
✅ Password Reset  

### **🛍️ Product Management**  
✅ Add/Edit/Delete Products  
✅ Categorize Products  
✅ Product Search & Filtering  

### **🛒 Cart Management**  
✅ Add/Remove Products to Cart  
✅ View Cart Items  

### **📦 Order Management**  
✅ Place Orders  
✅ Track Order Status  

### **📧 Notifications**  
✅ Email notifications for Order Status  
✅ Real-time updates via Laravel events  

---

## **🛠️ Tech Stack**  

| **Technology** | **Purpose** |
|----------------|------------|
| **Laravel**    | Backend Framework |
| **MySQL**      | Database |
| **JWT**        | Authentication |
| **Mailgun**    | Email Notifications |
| **PHP**        | Backend Language |
| **Redis** (Optional) | Caching |

---

## **🚀 Installation & Setup**  

### **🔹 Prerequisites**  
- PHP 8.x or higher  
- Composer  
- MySQL  
- Node.js (for running migrations and seeds)  

### **🔹 Steps to Run the Project**  

1️⃣ **Clone the repository**  
```bash
git clone https://github.com/your-repo-link-here
cd ShoppingCart-Ecommerce-Site-Backend
```

2️⃣ **Install dependencies**  
```bash
composer install
```

3️⃣ **Set up environment variables**  
```bash
cp .env.example .env
php artisan key:generate
```

4️⃣ **Configure database**  
Update the `.env` file with your database credentials.

5️⃣ **Run migrations and seed the database**  
```bash
php artisan migrate --seed
```

6️⃣ **Run the development server**  
```bash
php artisan serve
```

Now, the backend will be running on `http://localhost:8000`.

---

## **📜 API Documentation**  

The backend API is built with **RESTful principles**. The following key endpoints are available:  

- `POST /api/register` - Register a new user  
- `POST /api/login` - Login with existing credentials  
- `GET /api/products` - Get all products  
- `POST /api/cart` - Add item to the cart  
- `POST /api/order` - Place an order  

**Authentication**: JWT token-based authentication. You'll need to include a valid token in the header for protected routes.

---

## **📌 Postman API Collection**  
For easy testing of the backend endpoints, use the provided **Postman Collection**:  

🔗 **Download Postman Collection:**  
[ShoppingCartSystemBACKEND.postman_collection.json](https://github.com/user-attachments/files/19025956/ShoppingCartSystemBACKEND.postman_collection.json)

### **📌 How to Use:**  
1️⃣ Download the file using the link above.  
2️⃣ Open Postman → **File → Import**.  
3️⃣ Upload the `.json` file and start testing the API endpoints.  

---

## **🔗 Related Repository**  
🔹 **Frontend Repository:** [ShoppingCart-Ecommerce-Site-Frontend](https://github.com/zukoo52/ShoppingCart-Ecommerse-site-Front-End-.git)  

---

## **📩 Contributions & Feedback**  

We welcome contributions! If you have ideas for improvements, bug fixes, or new features, feel free to:  
✅ Open a **GitHub Issue**  
✅ Submit a **Pull Request**  
✅ Share your feedback  

---

## **📌 License**  
This project is licensed under the **MIT License**.  

---

**⭐** Feel free to star this repo if you found it useful! **⭐**

---

