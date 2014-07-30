/**
 * Track input time for all focusable fields
 * Require jQuery 1.4+
 */
window.formsTimeTrack = {};
formsTimeTrack.timeTrackArr = {};
formsTimeTrack.debugIsOn = true;
 
/**
 * Bind tracking
 * @param item      Textarea or input as DOM-node or jQuery element
 * @param category  Category for UA
 * @param action    Action for UA
 */
formsTimeTrack.bindTrack = function(item, category, action){
    $(item).on('focus', function(){
        var itemName = formsTimeTrack.getItemHash(this);
        if(itemName){
            formsTimeTrack.timeTrackArr[itemName] = (new Date).getTime();
            //DEBUG
            if(formsTimeTrack.debugIsOn && typeof console !== 'undefined' && typeof console.log !== 'undefined'){
                console.log('[FormsTimeTrack] Start input: ' + itemName + ' = ' + formsTimeTrack.timeTrackArr[itemName]);
            }
        }
    })
    $(item).on('blur', function(){
        var itemName = formsTimeTrack.getItemHash(this);
        if(itemName && typeof formsTimeTrack.timeTrackArr[itemName] !== 'undefined'){
            var calculatedTime = (new Date).getTime() - formsTimeTrack.timeTrackArr[itemName];
            ga('send', 'event', category, action, calculatedTime);
            //DEBUG
            if(formsTimeTrack.debugIsOn && typeof console !== 'undefined' && typeof console.log !== 'undefined'){
                console.log('[FormsTimeTrack] End input: ' + itemName + ' = ' + calculatedTime);
            }
        }
    })
}
formsTimeTrack.getItemHash = function(elem){
    var itemName = '';
    if(typeof elem.name !== 'undefined'){
        itemName += elem.name;
    }
    if(typeof elem.id !== 'undefined'){
        itemName += elem.id;
    }   
    if(itemName.length === 0){
        itemName = false;
    }
    return itemName;
}