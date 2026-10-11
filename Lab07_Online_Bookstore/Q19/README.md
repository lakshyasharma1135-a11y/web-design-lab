# Lab: Lab Sheet 7: Online Bookstore (PHP and MySQL) — Q19

**Question:** Style the entire bookstore application consistently using an external CSS framework (e.g., Bootstrap or custom CSS).

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it). An internet connection is needed to load Bootstrap from its CDN.

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q19. Style the entire bookstore application consistently using an external CSS framework (e.g., Bootstrap or custom CSS).

**File: `header.php`**

```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
```

```html
<nav class="navbar navbar-dark bg-dark px-3"> ... </nav>
<div class="container"><div class="row">
  <div class="col-md-3"><div class="card"><img class="card-img-top" src="..."><div class="card-body">
    <h5 class="card-title">Title</h5><a class="btn btn-primary" href="#">View</a></div></div></div>
</div></div>
<table class="table table-striped"> ... </table>
<form> <input class="form-control"> <button class="btn btn-success">Submit</button> </form>
```
