<?php
if(isset( $_GET['lang'])){
    if( $_GET['lang']=="en"){
       $flag = true;
    }else{
      $flag = false;
    }
}else{
  $flag = false;
}

if($flag){
    $lang = array(
        "html"=>"lang=\"en\"",

        "English"=>"English",
        "Arabic"=>"arabic",
    
        "Home"=>"Home",
        "About"=>"About",
        "Services"=>"Services",
        "Contact"=>"Contact",

        "Welcome to YouTour System" =>"Welcome to YouTour System",
        "your gate to online world."=>"your gate to online world.",
        "with us, we help you during your journey."=>"with us, we help you during your journey.",
    
        "Get Started with us"=>"Get Started with us",
        "Watch Video"=>"Watch Video",

        "AI Tour Guide"=>"AI Tour Guide",
        "Experience the future of tourism with our AI-powered tour guide."=>"Experience the future of tourism with our AI-powered tour guide.",

        "Our AI can answer questions based on images that you provide, making it easy to obtain information about your surroundings."=>"Our AI can answer questions based on images that you provide, making it easy to obtain information about your surroundings.",
        "Visual Question Answering"=>"Visual Question Answering",
        "More info"=>"More info",
        "Real-time Translation"=>"Real-time Translation",
        "Our AI can translate speech in real-time, making it easy to communicate with locals or navigate a foreign country."=>"Our AI can translate speech in real-time, making it easy to communicate with locals or navigate a foreign country.",
        "OCR"=>"OCR",
        "Optical Character Recognition (OCR) technology can scan and convert images of text into digital text"=>"Optical Character Recognition (OCR) technology can scan and convert images of text into digital text",

        

    );
}else{
    $lang = array(
        "html"=>" lang=\"ar\" dir=\"rtl\"",

        "English"=>"English",
        "Arabic"=>"arabic",
    
        "Home"=>"الرئيسيه",
        "About"=>"من نحن",
        "Services"=>"خدماتنا",
        "Contact"=>"اتصل بنا",

        
        "Welcome to YouTour System"  =>"مرحبًا بكم في YouTour System",
        "your gate to online world."=>"بوابتك إلى عالم الإنترنت",
        "with us, we help you to Design and bulid your website or application."=>" سنساعدك على تصميم وبناء مواقع الويب أو التطبيق الجوال الخاص بك",
    
        "Get Started with us"=>"اتصل بنا",
        "Watch Video"=>"شاهد فيديو",

        "Experience the future of tourism with our AI-powered tour guide."=>"جرب مستقبل السياحة مع مرشدنا السياحي المدعوم بالذكاء الاصطناعي",
        "Real-time Translation"=>"ابني موقع الويب الخاص بك ونشره على الإنترنت",
        "AI Tour Guide"=>"مرشد سياحي عن طريق الذكاء الاصطناعي",
        "Optical Character Recognition (OCR) technology can scan and convert images of text into digital text"=>"يمكن لتقنية  التعرف الضوئي على الحروف (OCR) مسح وتحويل صور النص إلى نص رقمي ",
        "More info"=>"مزيد من المعلومات",
        "OCR"=>"OCR ",
        "Visual Question Answering"=>"إجابة بصرية للأسئلة",
        "Our AI can answer questions based on images that you provide, making it easy to obtain information about your surroundings."=>" يمكن للذكاء الاصطناعي الخاص بنا الإجابة عن الأسئلة بناءً على الصور التي تقدمها ، مما يسهل الحصول على معلومات حول محيطك.",
        "Real-time Translation"=>"ترجمة فورية",
        "Our AI can translate speech in real-time, making it easy to communicate with locals or navigate a foreign country."=>"يمكن للذكاء الاصطناعي الخاص بنا ترجمة الكلام في الوقت الفعلي ، مما يسهل التواصل مع السكان المحليين أو التنقل في بلد أجنبي.",



    );
}



?>