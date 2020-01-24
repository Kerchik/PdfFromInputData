<?php
    class ConnectPdf {
        protected $name;
        protected $surname;
        protected $photo;
        protected $date;
        protected $email;
        protected $phone;
        protected $englishSpeak;
        protected $englishRead;
        protected $englishWrite;
        protected $russianSpeak;
        protected $russianRead; 
        protected $russianWrite;
        protected $latvianSpeak;
        protected $latvianRead;
        protected $latvianWrite;
        

        protected $htmlcss;
        protected $php;

        protected $companyName;
        protected $workStart;
        protected $workEnd;
        protected $position;
        protected $positionCategory;

        protected $eduName;
        protected $country;
        protected $startYear;
        protected $endYear;
        protected $specialty;
        protected $anotherLanguages;
        protected $anotherKnowledge;
        protected $anotherWorks;
        protected $anotherEdu;

        protected $mpdf;
        protected $stylesheet;

        public function __construct($post) {
            // extract variables from _POST
            $this->name = $post['firstName'];
            $this->surname = $post['surname'];
            $this->photo = $post['photo'];
            $this->date = $post['date'];
            $this->email = $post['email'];
            $this->phone = $post['phone'];
            $this->englishSpeak = $post['englishSpeak'];
            $this->englishRead = $post['englishRead'];
            $this->englishWrite = $post['englishWrite'];
            $this->russianSpeak = $post['russianSpeak'];
            $this->russianRead = $post['russianRead'];
            $this->russianWrite = $post['russianWrite'];
            $this->latvianSpeak = $post['latvianSpeak'];
            $this->latvianRead = $post['latvianRead'];
            $this->latvianWrite = $post['latvianWrite'];
            

            $this->htmlcss = $post['htmlcss'];
            $this->php = $post['php'];

            $this->companyName = $post['companyName'];
            $this->workStart = $post['workStart'];
            $this->workEnd = $post['workEnd'];
            $this->position = $post['position'];
            $this->positionCategory = $post['positionCategory'];

            $this->eduName = $post['eduName'];
            $this->country = $post['country'];
            $this->startYear = $post['startYear'];
            $this->endYear = $post['endYear'];
            $this->specialty = $post['specialty'];

            $this->language = $post['language'];
            $this->knowledge = $post['knowledge'];
            $this->work = $post['work'];
            $this->edu = $post['edu'];
            // Connect Mpdf library
            require_once __DIR__ . '/vendor/autoload.php';
            $this->stylesheet = file_get_contents('style.css');
            $this->mpdf = new \Mpdf\Mpdf();
            $this->mpdf->WriteHTML($this->stylesheet,\Mpdf\HTMLParserMode::HEADER_CSS);
        }
        
    }

    class MakePdf extends ConnectPdf {
        public function createHtml() {
            // creating html for pdf file
            $data .= "<div id='logo'><img src='logo.png' /></div>";
            $data .= "<div id='cv'><h1>CV   </h1></div>";
            $data .= "<div class='pamat'><p>Pamatinformācija</p></div>";
            $data .= "<div class='line'> <hr /></div>";

            $data .= "<img id='avatar' src=$this->photo />";
            $data .= "<div id='info' >";
            $data .= "Vārds, uzvārds: $this->name $this->surname <br />";
            $data .= "Dzimšanas datums: $this->date <br />";
            $data .= "E-pasta adrese: $this->email <br />";
            $data .= "Telefons: $this->phone <br />";
            $data .= "</div>";

            $data .= "<div class='pamat'><p>Iemaņas un zināšanas</p></div>";
            $data .= "<div class='line'> <hr /></div>";

            $data .= "<div>";
            $data .= "<h2><b>Valodu zināšanas</b></h2>";
            $data .= "<table>";
            $data .= "<tr class='grey'><th>Valoda</th><th>Runātprasme</th><th>Lasītprasme</th><th>Rakstītprasme</th></tr>";
            $data .= "<tr><td>Angļu</td><td>$this->englishSpeak</td><td>$this->englishRead</td><td>$this->englishWrite</td></tr>";
            $data .= "<tr><td>Krievu</td><td>$this->russianSpeak</td><td>$this->russianRead</td><td>$this->russianWrite</td></tr>";
            $data .= "<tr><td>Latviešu</td><td>$this->latvianSpeak</td><td>$this->latvianRead</td><td>$this->latvianWrite</td></tr>";
            for ($i = 0; $i<count($this->anotherLanguages);$i++) {
                $name = $this->anotherLanguages[$i]['name'];
                $speak = $this->anotherLanguages[$i]['speak'];
                $read = $this->anotherLanguages[$i]['read'];
                $write = $this->anotherLanguages[$i]['write'];
                $data .= "<tr><td>$name</td><td>$speak</td><td>$read</td><td>$write</td></tr>";
            }
            $data .= "</table>";
            $data .= "</div>";

            $data .= "<div>";
            $data .= "<h2><b>Datorzinašanas</b></h2>";
            $data .= "<table>";
            $data .= "<tr class='grey'><th>Nosaukums</th><th>Zināšanu līmenis</th></tr>";
            $data .= "<tr><td>HTML+CSS</td><td>$this->htmlcss</td></tr>";
            $data .= "<tr><td>PHP</td><td>$this->php</td></tr>";
            for ($i = 0; $i<count($this->anotherKnowledge);$i++) {
                $name = $this->anotherKnowledge[$i]['name'];
                $level = $this->anotherKnowledge[$i]['level'];
                $data .= "<tr><td>$name</td><td>$level</td></tr>";
            }
            $data .= "</table>";
            $data .= "</div>";

            $data .= "<div>";
            $data .= "<h2>Darba pieredze</h2>";
            $data .= "<hr />";
            $data .= "Darba vieta/Uzņēmums:  $this->companyName<br />";
            $data .= "Datums no: $this->workStart <br />";
            $data .= "Datums līdz: $this->workEnd <br />";
            $data .= "Ieņemamais amats: $this->position <br />";
            $data .= "Amata kategorija: $this->positionCategory <br />";
            
            for ($i = 0; $i<count($this->anotherWorks);$i++) {   
                $companyName = $this->anotherWorks[$i]['companyName'];
                $workStart = $this->anotherWorks[$i]['workStart'];
                $workEnd = $this->anotherWorks[$i]['workEnd'];
                $position = $this->anotherWorks[$i]['position'];
                $positionCategory = $this->anotherWorks[$i]['positionCategory'];
                $data .= "<br />";
                $data .= "Darba vieta/Uzņēmums:  $companyName<br />";
                $data .= "Datums no: $workStart <br />";
                $data .= "Datums līdz: $workEnd <br />";
                $data .= "Ieņemamais amats: $position <br />";
                $data .= "Amata kategorija: $positionCategory <br />";
            }
            $data .= "</div>";

            $data .= "<div>";
            $data .= "<h2>Izglītība</h2>";
            $data .= "<hr />";
            $data .= "Izglītības iestādes nosaukums: <b>$this->eduName</b><br />";
            $data .= "Valsts: $this->country <br />";
            $data .= "Gads no: $this->startYear <br />";
            $data .= "Gads līdz: $this->endYear <br />";
            $data .= "Specialitāte: $this->specialty <br />";
            
            for ($i = 0; $i<count($this->anotherEdu);$i++) {   
                $eduName = $this->anotherEdu[$i]['eduName'];
                $country = $this->anotherEdu[$i]['country'];
                $startYear = $this->anotherEdu[$i]['startYear'];
                $endYear = $this->anotherEdu[$i]['endYear'];
                $specialty = $this->anotherEdu[$i]['specialty'];
                $data .= "<br />";
                $data .= "Izglītības iestādes nosaukums: <b>$eduName</b><br />";
                $data .= "Valsts: $country <br />";
                $data .= "Gads no: $startYear <br />";
                $data .= "Gads līdz: $endYear <br />";
                $data .= "Specialitāte: $specialty <br />";
            }
            $data .= "</div>";

            $this->mpdf->WriteHTML($data);
            $this->mpdf->Output();
            
        
        }
        public function additionalInfo() {
            // Check and add additional fields
            for ($i = 0; $i<count($this->language);$i++) {
                $this->anotherLanguages[$i]['speak'] =  $this->language[$i]['speak'];
                $this->anotherLanguages[$i]['read'] =  $this->language[$i]['read'];
                $this->anotherLanguages[$i]['write'] =  $this->language[$i]['write'];
                $this->anotherLanguages[$i]['name'] =  $this->language[$i]['name'];
            } 
            for ($i = 0; $i<count($this->knowledge);$i++) {
                $this->anotherKnowledge[$i]['name'] =  $this->knowledge[$i]['name'];
                $this->anotherKnowledge[$i]['level'] = $this->knowledge[$i]['level'];
            }
            for ($i = 0; $i<count($this->work);$i++) {
                $this->anotherWorks[$i]['companyName'] =  $this->work[$i]['companyName'];
                $this->anotherWorks[$i]['workStart'] =  $this->work[$i]['workStart'];
                $this->anotherWorks[$i]['workEnd'] =  $this->work[$i]['workEnd'];
                $this->anotherWorks[$i]['position'] =  $this->work[$i]['position'];
                $this->anotherWorks[$i]['positionCategory'] =  $this->work[$i]['positionCategory'];
            }
            for ($i = 0; $i<count($this->edu);$i++) {
                $this->anotherEdu[$i]['eduName'] =  $this->edu[$i]['eduName'];
                $this->anotherEdu[$i]['country'] =  $this->edu[$i]['country'];
                $this->anotherEdu[$i]['startYear'] =  $this->edu[$i]['startYear'];
                $this->anotherEdu[$i]['endYear'] =  $this->edu[$i]['endYear'];
                $this->anotherEdu[$i]['specialty'] =  $this->edu[$i]['specialty'];
            }
        }
    }
    $pdf = new MakePdf($_POST);
    $pdf->additionalInfo();
    $pdf->createHtml();
    
?>