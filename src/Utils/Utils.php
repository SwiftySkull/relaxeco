<?php

namespace App\Utils;

class Utils
{

    /**
     * Check if a seance can be displayable on the website
     *
     * @return bool
     */
    public function seanceDisplayableOnWebsite(object $seance)
    {
        if (null === $seance->getTitle()) {
            return false;
        }

        if (null === $seance->getContent()) {
            return false;
        }

        if (null === $seance->getPrice()) {
            return false;
        }

        if (null === $seance->getDuration()) {
            return false;
        }

        if (null === $seance->getPopulation()) {
            return false;
        }

        return true;
    }

    /**
     * Check if a literature can be displayable on the website
     *
     * @return bool
     */
    public function literatureDisplayableOnWebsite(object $literature)
    {
        if (null === $literature->getTitle()) {
            return false;
        }

        if (null === $literature->getOriginalContent()) {
            return false;
        }

        if (null === $literature->getAuthor()) {
            return false;
        }

        return true;
    }

    /**
     * Check if a quote can be displayable on the website
     *
     * @return bool
     */
    public function quotesDisplayableOnWebsite(object $quote)
    {
        if (null === $quote->getContent()) {
            return false;
        }

        if (null === $quote->getAuthor()) {
            return false;
        }

        return true;
    }

    /**
     * Check the content to transform it in HTML elements
     *
     * @param object $object The object to check the content in
     * @return object The object with the content updated as HTML
     */
    public function checkContent($object)
    {
        $string = $object->getOriginalcontent().'FIN';

        // paragraphs elements
        $cleanParagraphs = preg_replace('/(.*)(\r\n?)/', '<p>$1</p>$2', $string);
        //

        // Bak to line elements
        $cleanLastLine = preg_replace('/([éèà@êùûôîïüöäâçœa-zA-Z0-9\.,:!\*\$\?\-\(\)_ \/\[\]\{\};\'"#=%]*)FIN/', '<p>$1</p>', $cleanParagraphs);
        //

        // p elements alone
        $cleanPs = preg_replace('/<p><\/p>/', '', $cleanLastLine);
        //

        $object->setContent($cleanPs);

        return $object;
    }

    /**
     * Check the content to transform it in HTML elements
     *
     * @param object $object The object to check the content in
     * @return object The object with the content updated as HTML
     */
    public function checkLiteratureContent($object)
    {
        $string = 'START'.$object->getOriginalcontent().'END';

        // phrases elements
        $cleanPhrases = preg_replace('/(.*)(\r\n?)/', '<p>$1</p>$2', $string);
        //

        // Bak to line elements
        $cleanLastLine = preg_replace('/([éèà@êùûôîïüöäâçœa-zA-Z0-9\.,:!\*\$\?\-\(\)_ \/\[\]\{\};\'"#=%]*)END/', '<p>$1</p>END', $cleanPhrases);
        //

        // p elements alone
        $cleanPs = preg_replace('/<p><\/p>/', '', $cleanLastLine);
        //

        $replaceStart = preg_replace('/<p>START/', 'START<p>', $cleanPs);
       
        // Bak to line elements
        $cleanEndOfLines = preg_replace('/<\/p>\r\n/', '</p>', $replaceStart);
        //

        // Bak to line elements
        $cleanLines = preg_replace('/[\r\n]+/', 'BREAK', $cleanEndOfLines);
        //

        // paragraphs elements
        $cleanParagraphs = preg_replace('/BREAK/', '</div><div>', $cleanLines);
        //

        $removeStart = preg_replace('/START/', '<div>', $cleanParagraphs);
        $removeEnd = preg_replace('/END/', '</div>', $removeStart);

        $object->setContent($removeEnd);

        return $object;
    }
}

