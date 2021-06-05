function loadingMsg(params){
    let wrap = document.getElementById('infowListWrap');
    wrap.innerHTML = 
    `
    <div class="loading-wait">
        ${wrap.message}
        <div class="loading-icon">
            <i class="fa fa-spinner "></i>
        </div>
    </div>
    `
    
}