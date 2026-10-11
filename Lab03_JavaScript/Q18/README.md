# Lab: Lab Sheet 3: JavaScript — Q18

**Question:** Implement a simple todo list application in JavaScript allowing users to add and delete tasks from an unordered list.

## Run / view the answer
- 1. Open `index.html` in Chrome/Edge/Firefox (double-click it).
- 2. Follow the on-page prompts/buttons. For console output, press **F12 → Console**.

## Expected output
A browser page should display the requested HTML structure, form, table, layout, or interactive example. If JavaScript prompts or buttons are used, try the interaction; open **F12 → Console** to see console output.

## Answer

## Q18. Implement a simple todo list application in JavaScript allowing users to add and delete tasks from an unordered list.

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab Sheet 3 - Q18</title>
</head>
<body>
<input id="task" placeholder="New task"> <button id="addBtn">Add</button>
<ul id="todo"></ul>
<script>
  document.getElementById("addBtn").onclick = () => {
    const t = document.getElementById("task");
    if (!t.value.trim()) return;
    const li = document.createElement("li");
    li.textContent = t.value + " ";
    const del = document.createElement("button");
    del.textContent = "Delete";
    del.onclick = () => li.remove();
    li.appendChild(del);
    document.getElementById("todo").appendChild(li);
    t.value = "";
  };
</script>
</body>
</html>
```
