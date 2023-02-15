function download(url) {
    const a = document.createElement('a')
    a.href = url
    a.download = url.split('./sample-resume').pop()
    document.body.appendChild(a)
    a.click()
    document.body.removeChild(a)
  }
  function sendEmail() {
    Email.send({
        SecureToken: "security token of your smtp",
        To: "someone@gmail.com",
        From: "someone@gmail.com",
        Subject: "Subject...",
        Body: document.getElementById('text').value
    }).then( 
        message => alert("mail sent successfully")
    );
}