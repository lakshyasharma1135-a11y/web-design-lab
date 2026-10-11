# Lab: Lab Sheet 8: Client Website Project — Q17

**Question:** Set up a local test environment to host and run the client website smoothly before presentation.

## Run / view the answer
- This file contains shell/server commands. Read it first and run commands one at a time only in a suitable Linux/Ubuntu lab VM. Do not blindly run commands requiring `sudo`.

## Expected output
The result depends on the Linux/Apache environment. Run commands individually in a lab VM and verify each service or configuration change; do not run privileged commands blindly.

## Answer

## Q17. Set up a local test environment to host and run the client website smoothly before presentation.

```bash
cd crumb-co
python3 -m http.server 8000          # then open http://localhost:8000
# or
npx serve .                          # or use the Live Server extension in VS Code
```
