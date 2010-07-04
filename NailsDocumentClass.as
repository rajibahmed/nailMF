package  {
	
	import flash.display.MovieClip;
	import nl.demonsters.debugger.MonsterDebugger;
	import flash.events.MouseEvent;
	
	
	public class NailsDocumentClass extends MovieClip {
		public var hand:Hand = new Hand();
		public var handNext:nextHand = new nextHand();
		public var handPrev:prevHand = new prevHand();
		public var d:MonsterDebugger ;
		
		public function NailsDocumentClass(){
			
			d  = new MonsterDebugger(this);
			
			handNext.x = 150 ;
			handNext.y = 500;
			handPrev.x = 50;
			handPrev.y = 500;
			handPrev.buttonMode = true;
			handNext.buttonMode = true;
			
			addChild(handPrev);
			addChild(handNext);
			hand.gotoAndStop(3);
			addChild(hand);
			
			handPrev.addEventListener(MouseEvent.CLICK,showFairHand);
			handNext.addEventListener(MouseEvent.CLICK,showDarkerHand);
		
		}
		
		
		protected function showDarkerHand(event:MouseEvent):void
		{
			if(hand.currentFrame <6){
				hand.gotoAndStop(hand.currentFrame+1) ;
			}
		}
		
		protected function showFairHand(event:MouseEvent):void
		{
			if(hand.currentFrame > 0){
				hand.gotoAndStop(hand.currentFrame- 1) ;
			}
		}
			
	}
	
}
