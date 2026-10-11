# Lab: Lab Sheet 7: Online Bookstore (PHP and MySQL) — Q20

**Question:** Test the complete end-to-end e-commerce user journey: browsing, searching, adding to cart, user login, checkout, and order confirmation.

## Run / view the answer
- This question is primarily a testing/design/presentation task. Follow the checklist in the answer below.

## Expected output
With PHP running and any required MySQL database/tables configured, the page should show the requested result (for example, a table, form, or success message). If it fails, check the database name, credentials, required shared files, and table setup.

## Answer

## Q20. Test the complete end-to-end e-commerce user journey: browsing, searching, adding to cart, user login, checkout, and order confirmation.

| Step | Action | Expected result |
|------|--------|-----------------|
| 1 | Open `index.php` | Banner and featured books are shown |
| 2 | Search for "Clean" | Only matching books appear |
| 3 | Open a book and click "Add to Cart" | Cart count becomes 1 |
| 4 | Enter a quantity above the stock | Warning appears and quantity is limited |
| 5 | Open checkout without logging in | Redirected to the login page |
| 6 | Register, then log in | Redirected home, navbar shows Logout |
| 7 | Fill shipping details and place the order | Invoice page opens |
| 8 | Open `orders.php` | New order is listed with status Pending |
| 9 | As admin, change the status to Shipped | Customer sees the updated status |
| 10 | Check `books.stock` in the database | Stock is reduced by the ordered quantity |
