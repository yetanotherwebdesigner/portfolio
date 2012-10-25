var canvas,
stage,
screen_width,
screen_height,
bmpAnimation,
bmpAnimationIdle,
numImagesLoaded=0,
yDestination=0,
imgYRun=new Image(),imgYIdle=new Image();
function init(){
    canvas=document.getElementsByTagName("canvas")[0];
    canvas.width=window.innerWidth-17;
    canvas.height=64;
    imgYRun.onload=handleImageLoad;
    imgYRun.onerror=handleImageError;
    imgYRun.src="http://cdn.yetanotherwebdesigner.com/images/y-run.png";
    imgYIdle.onload=handleImageLoad;
    imgYIdle.onerror=handleImageError;
    imgYIdle.src="http://cdn.yetanotherwebdesigner.com/images/y-idle.png";
}
function reset(){
    stage.removeAllChildren();
    Ticker.removeAllListeners();
    stage.update();
}
function handleImageLoad(e){
    numImagesLoaded++;
    if(numImagesLoaded==2){
	numImagesLoaded=0;
	startGame();	
    }
}
function startGame(){
    //create new stage, pointing it to canvas
    stage=new Stage(canvas);
    //grab canvas height & width for later calculations
    screen_width=canvas.width;
    screen_height=canvas.height;
    yDestination=(screen_width-974)/2+974-64;
    //create spritesheet & assign associated data
    var spritesheet=new SpriteSheet({
					//image to use
					images:[imgYRun],
					//width,height,registration point of each sprite
					frames:{width:64,height:64,regX:32,regY:32},
					animations:{walk:[0,9,"walk",4]}//walk being the sequence from 0 to 9, after which go back to 'walk' again
				    });

    // we could flip the display objects with scaleX=-1, but this is expensive in most browsers. instead, we generate a new sprite sheet which includes the flipped animations.
//    createjs.SpriteSheetUtils.addFlippedFrames(spritesheet,true,false,false);
    
    //create a BitMapAnimation instance to display and play back sprite sheet
    bmpAnimation=new BitmapAnimation(spritesheet);
    //set registration point (point it'll be positioned & _rotated_ around) to center of frame dimenstions
    bmpAnimation.regX=bmpAnimation.spriteSheet.frameWidth/2|0;//"|0" is shortcut Math.floor
    bmpAnimation.regY=bmpAnimation.spriteSheet.frameHeight/2|0;
    //start playing the first sequence
    // walk_h has been generated by addFlippedFrames (more specifically, _flip() and contained the right facing animations
    bmpAnimation.gotoAndPlay("walk");
    //set up a shadow (ridiculously expensive)
    bmpAnimation.shadow=new Shadow("#72A4AD",0,3,1);
    bmpAnimation.name="y-run";
    bmpAnimation.direction="ltr";
    //set speed of animation
    bmpAnimation.vX=8;
    //initial x position of animation
    bmpAnimation.x=16;
    bmpAnimation.y=32;
    //have animation start at a specific frame
    bmpAnimation.currentFrame=10;
    stage.addChild(bmpAnimation);
    Ticker.addListener(window);
    Ticker.useRAF=true;
    Ticker.setFPS(60);

    var spriteSheetIdle=new SpriteSheet({
					    images:[imgYIdle],
					    frames:{width:64,height:64,regX:32,regY:32},
					    animations:{idle:[0,0,"idle"]}
					});
    bmpAnimationIdle=new BitmapAnimation(spriteSheetIdle);
    bmpAnimationIdle.name="y-idle";
    bmpAnimationIdle.x=yDestination;// -104;
    bmpAnimationIdle.y=32;
    bmpAnimationIdle.shadow=new Shadow("#72A4AD",0,3,1);
    bmpAnimationIdle.onClick=function(evt){window.location="https://plus.google.com/b/101251082499312129098/101251082499312129098/posts";};
}

function handleImageError(e){
    throw new Error("Error loading image: " + e.target.src);
}
function tick(){
    //hit testing the screen width, else our sprite will disappear
    if(bmpAnimation.x>=yDestination){
	//we've reached the right side of the screen
	//We need to walk left now to go back to our initial position
	bmpAnimation.direction="ltr";
	bmpAnimation.gotoAndStop("walk");
	stage.removeChild(bmpAnimation);
	bmpAnimationIdle.gotoAndPlay("idle");
	$("#y-gplus").css({display:"inline-block",left:yDestination-32});
	stage.addChild(bmpAnimationIdle);
    }
    //moving sprite based on direction & speed
    if(bmpAnimation.direction=="ltr"){
	bmpAnimation.x+=bmpAnimation.vX;
    }
/*    else{
	bmpAnimation.x-=bmpAnimation.vX;
    }*/
    stage.update();
}

