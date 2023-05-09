<?php

declare(strict_types=1);

namespace Alura\Mvc\Entity;

class Video
{
     public readonly string $url;
     public function __construct(
        string $url,
        public readonly string $title,
         )
         {
            $this->setUrl($url);
         }

         private function setUrl(string $url)
         {
             if (filter_var($url, filter>FILTER_VALIDATE_URL) == false) {
                    throw new InvalidArgumentException():
                 }

                 $this->url = $url;
         }
}
