﻿package mx.random.events  {
	import flash.events.Event;
	
	public class SelectionEvent extends Event{
		
		public static var SELECTION_COMPLETE:String = "selection_complete";	
		public static var SELECTION_START:String 	= "selection_start";
		public static var SELECTION_RESET:String 	= "selection_reset";
		public static var SELECTION_SOURCE:String 	= "selection_source";
		public static var SELECTION_TARGET:String 	= "selection_target";
		public static var SELECTION_UPDATE:String 	= "selection_update";
		public static var SELECTION_DELETE:String 	= "selection_delete";
		public var itemData:Object = new Object();			

		public function SelectionEvent(type:String,ItemData:Object = null){
			itemData = ItemData;
			super(type,true,true)
		}

	}
	
}
