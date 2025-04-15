# Fibonacci Display Plugin
This is a custom WordPress plugin that displays a string of Fibonacci numbers using a shortcode.

The last Fibonacci number in the list will be the first one greater than the calculated limit: limit = day_of_birth * month_of_birth * 60

For example, if your birthday is 11 July, the limit will be: 11 * 7 * 60 = 4620

---

## 🔧 Installation

1. Clone or download this repository.
2. Copy the folder `fibonacci-display` into your WordPress site's `wp-content/plugins/` directory.
3. Activate the plugin from the **WordPress Admin Dashboard > Plugins**.

---

## 🧩 Usage

Use the shortcode `[fibonacci_numbers]` inside any post, page, or widget.

### Optional Parameters:
You can pass your birthday directly in the shortcode: [fibonacci_numbers day="11" month="7"]

---

## 📌 Example Output

If `day = 11` and `month = 7`, the output will look like:

Fibonacci numbers to the first number greater than 4620: 0, 1, 1, 2, 3, 5, 8, 13, ..., 6765
