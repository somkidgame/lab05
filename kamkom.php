<?php 
$a = array (
    "สิ่งที่สำคัญที่สุดคือ เราต้องเชื่อว่าเราทำได้",
    "ผมรู้...ว่าผมไม่รู้อะไร",
    "ความสำเร็จมีขึ้นตอนอย่าใจร้อน",
    "อินเทรนด์ สำหรับผมคือ เอาท์",
    "จะประสบความสำเร็จไม่จำเป็นต้องเปลี่ยนผู้นำเสมอ",

    "ดอกไม้อ่ะมีปัญญาซื้อ แต่คนถืออ่ะไม่มีปัญญาหา",
    "ที่อยากมีคนดูแล ไม่ได้อ่อนแอเราแค่อ่อย",
    "ไม่ได้หลบหน้า แต่ไม่รู้จะสบสายตาในฐานะอะไร",
    "คนดีไม่ต้องเบ่ง คนเก่งไม่ต้องคุย",
    "ไม่ได้ครอบครอง แค่ได้ลิ้มลองก็พอใจ",
    "ล้มแล้วลุก ปัดฝุ่นแก้เขิน แล้วเดินต่อไป",
    "ไม่หล่อแต่อร่อย ไม่ได้อ่อยแต่อยากให้ชิม",
    "เลิกรักยังไง ในใจมีแต่เธอ",
    "ตอนเด็กอยากมีชีวิตก้าวหน้า พอโตมาอยากได้เก้านิ้ว",
    "คนใดที่ไม่หืน เขาว่าฝืนธรรมชาติ",
    "ที่ใดมีรัก ที่นั้นมีทุกข์",
    "ยอมรับว่าความหล่อมีน้อย แต่ความจริงใจเต็มร้อยนะครับ",
    "เรื่องเรียนคิดให้หนัก เรื่องรักคิดให้เป็น",
    "นี้ใจนะไม่ใช่ใบปลิว ให้ไปแล้วสนใจกันบ้าง",
    "รักใดเล่า จะเท่า รักของพ่อแม่",
    "อดีตมันอาจจะทำให้มีความทุกข์ เพื่ออนาคตจะได้มีความสุข",
    "ผู้ไม่มีแผลเป็น คือผู้ไม่มีประสบการณ์",
    "เป็นโสดก็เหงา รักเขาก็เจ็บ",
    "ของเล่น ไม่มีสิทธิ์เลือกผู้เล่น",
    "ความรักไม่ใช่เรื่องล้อเล่น ถ้าจะมาพูดเล่นๆก็อย่าพูดว่ารัก"
);
$random_key = array_rand($a,1);
echo "<p>" .$a[$random_key] . "</p>";