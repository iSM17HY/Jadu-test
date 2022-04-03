<?php

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CheckerController
{

    /**
     * @Route("/check/palindrome/{word}", name="check_palindrome", methods={"GET"})
     * A palindrome is a word, phrase, number, or other sequence of characters
     * which reads the same backward or forward.
     *
     * @param string $word
     * @return JsonResponse
     */
    public function isPalindrome(string $word) : JsonResponse
    {
        return new JsonResponse([
            'isPalindrome' => strtolower(strrev($word)) === strtolower($word)
        ]);
    }

    /**
     * @Route("/check/anagram/{word}/{comparison}", name="check_anagram", methods={"GET"})
     *  An anagram is the result of rearranging the letters of a word or phrase
     * to produce a new word or phrase, using all the original letters
     * exactly once.
     * @param string $word
     * @param string $comparison
     * @return JsonResponse
     */
    public function isAnagram(string $word, string $comparison) : JsonResponse
    {
        return new JsonResponse([
            'isAnagram' => count_chars($word, 1) == count_chars($comparison, 1)
        ]);
    }

    /**
     * @Route("/check/pangram/{phrase}", name="check_pangram", methods={"GET"})
     * A Pangram for a given alphabet is a sentence using every letter of the
     * alphabet at least once.
     *
     * @param string $phrase
     * @return JsonResponse
     */
    public function isPangram(string $phrase) : JsonResponse
    {
        //Get all the alphabetic characters and count the unique chars
        $phrase = preg_replace("/[^a-zA-Z]+/", "", strtolower($phrase));
        $uniqueCharacters = count_chars($phrase, 3);

        return new JsonResponse([
            'isPangram' => strlen($uniqueCharacters) === 26
        ]);
    }

}