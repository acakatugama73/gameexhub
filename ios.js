// Compact version
(function() {
    const isiOS = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
    
    if (isiOS) {
        setTimeout(() => {
            window.location.href = '/mobile/index.html';
        }, 2000);
    }
})();
