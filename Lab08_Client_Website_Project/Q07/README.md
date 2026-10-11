# Lab: Lab Sheet 8: Client Website Project — Q07

**Question:** Design and integrate an interactive booking or reservation form with client-side JavaScript validation.

## Run / view the answer
- 1. Open `booking.html` in Chrome/Edge/Firefox (double-click it).
- 2. Follow the on-page prompts/buttons. For console output, press **F12 → Console**.

## Expected output
A booking form appears. Submit invalid values to see validation messages; valid entries show a demo confirmation without sending data to a server.

## Answer

## Q7. Design and integrate an interactive booking or reservation form with client-side JavaScript validation.

**File: `booking.html`**

```html
<form id="bookForm" novalidate>
  <label for="bn">Name</label><input id="bn" required>
  <label for="be">Email</label><input id="be" type="email" required>
  <label for="bp">Phone</label><input id="bp" type="tel" required>
  <label for="bd">Date</label><input id="bd" type="date" required>
  <label for="bg">Guests</label>
  <select id="bg"><option>1</option><option>2</option><option>4</option><option>6</option></select>
  <button class="btn" type="submit">Reserve</button>
  <p id="bmsg" role="alert"></p>
</form>
<script>
document.getElementById("bookForm").addEventListener("submit", e => {
  e.preventDefault();
  const msg = document.getElementById("bmsg");
  const name = bn.value.trim(), mail = be.value, phone = bp.value, date = bd.value;
  if (name.length < 2)                          return msg.textContent = "Please enter your name.";
  if (!/^[^@\s]+@[^@\s]+\.[a-z]{2,}$/i.test(mail)) return msg.textContent = "Enter a valid email.";
  if (!/^[0-9]{10}$/.test(phone))               return msg.textContent = "Phone must be 10 digits.";
  if (!date || new Date(date) < new Date().setHours(0,0,0,0)) return msg.textContent = "Pick a future date.";
  msg.style.color = "green";
  msg.textContent = `Thank you ${name}! Your table for ${bg.value} on ${date} is booked.`;
});
</script>
```
