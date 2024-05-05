document.getElementById('usermsg').addEventListener('keypress', function(event) {
    if (event.key === 'Enter') {
        var msg = this.value;
        if (msg.trim() === '') {
            return;
        }
        this.value = '';
        var chatbox = document.getElementById('chatbox');
        chatbox.innerHTML += '<p><span class="username-msg"><?php echo $username; ?>:</span> <span class="message">' + msg + '</span></p>';
        chatbox.scrollTop = chatbox.scrollHeight;
    }
});c 