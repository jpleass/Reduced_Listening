<?php

return [
	'debug'  => true,
	 'hooks' => [
        'file.create:after' => function ($file) {
					$fileurl = $file->parent()->contentFileDirectory().'/'.$file->filename();
					$dir = $file->parent()->contentFileDirectory();
					$filename = $file->filename();
					if($file->type() == "audio"){
						// exec("audiowaveform -i $fileurl -o $dir/waveform.dat --pixels-per-second 20 --bits 8");
						// exec("audiowaveform -i $dir/waveform.dat -o $dir/waveform.json");
						// exec("audiowaveform -i $dir/waveform.dat -o $dir/waveform.json");
						// exec("python ../scale-json.py waveform.json");
					}
        }
    ]
];