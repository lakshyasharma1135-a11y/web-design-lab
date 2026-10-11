# Lab: Lab Sheet 8: Client Website Project — Q20

**Question:** Conduct a final code audit and accessibility evaluation using automated tools (e.g., Lighthouse).

## Run / view the answer
- This file contains shell/server commands. Read it first and run commands one at a time only in a suitable Linux/Ubuntu lab VM. Do not blindly run commands requiring `sudo`.

## Expected output
The result depends on the Linux/Apache environment. Run commands individually in a lab VM and verify each service or configuration change; do not run privileged commands blindly.

## Answer

## Q20. Conduct a final code audit and accessibility evaluation using automated tools (e.g., Lighthouse).

1. Open the site in Chrome, press `F12` and select the **Lighthouse** tab.
2. Select Performance, Accessibility, Best Practices and SEO, choose Mobile and click **Analyze page load**.
3. Note the scores (target 90+), fix reported issues (missing alt text, low contrast, large images, missing meta description) and run it again.
4. Also check with the WAVE extension (https://wave.webaim.org) and navigate the whole site using only the `Tab` key.
5. Save before and after screenshots of the scores.

```bash
npx lighthouse http://localhost:8000 --view
```
