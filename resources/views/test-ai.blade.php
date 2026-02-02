<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Gemini Test</title>
</head>
<body>

<h3>Gemini AI Test</h3>

<input id="msg" placeholder="Type something…" />
<button onclick="send()">Send</button>

<pre id="out"></pre>

<script>
async function send() {
    const res = await fetch('/api/gemini-test', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ message: msg.value })
    });

    const data = await res.json();

    // SAFE read (Gemini structure)
    if (data.candidates) {
        out.innerText =
            data.candidates[0].content.parts[0].text;
    } else {
        out.innerText = JSON.stringify(data, null, 2);
    }
}
</script>

</body>
</html>
