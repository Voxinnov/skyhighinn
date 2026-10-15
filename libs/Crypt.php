<?php

declare(strict_types=1);

class Crypt
{
    /**
     * Encryption keys array
     *
     * @var array<int, string>
     */
    public array $keys = [];

    /**
     * Generate encryption keys based on key string
     *
     * @param string|int|null $ckey
     * @return void
     */
    public function crypt_key(string|int|null $ckey): void
    {
        $ckey = (string)($ckey ?? '');
        $this->keys = [];

        if ($ckey === '') {
            return;
        }

        $c_key = base64_encode(sha1(md5($ckey)));
        $c_key = substr($c_key, 0, (int) round(ord($ckey[0]) / 5));

        $c2_key = base64_encode(md5(sha1($ckey)));
        $last = strlen($ckey) - 1;
        $c2_key = substr($c2_key, 1, (int) round(ord($ckey[$last]) / 7));

        $c3_key = base64_encode(sha1(md5($c_key) . md5($c2_key)));
        $mid = (int) round($last / 2);
        $c3_key = substr($c3_key, 1, (int) round(ord($ckey[$mid]) / 9));

        $c_key = base64_encode($c_key . $c2_key . $c3_key);

        $len = strlen($c_key);
        for ($i = 0; $i < $len; $i++) {
            $this->keys[] = $c_key[$i];
        }
    }

    /**
     * Encrypt string (maintains backwards compatibility with base64 storage)
     *
     * @param string|int|float|null $string
     * @return string
     */
    public function encrypt(string|int|float|null $string): string
    {
        $str = (string)($string ?? '');

        /*
        // Legacy custom byte-shifting algorithm (preserved for reference, converted to PHP 8.4 syntax):
        $keys = $this->keys;
        if (!empty($keys)) {
            for ($i = 0; $i < strlen($str); $i++) {
                $id = $i % count($keys);
                $ord = ord($str[$i]);
                $ord = $ord | ord($keys[$id]);
                $id++;
                $ord = $ord & ord($keys[$id]);
                $id++;
                $ord = $ord ^ ord($keys[$id]);
                $id++;
                $ord = $ord + ord($keys[$id]);
                $str[$i] = chr($ord);
            }
        }
        */

        return base64_encode($str);
    }

    /**
     * Decrypt string (maintains backwards compatibility with base64 storage)
     *
     * @param string|int|float|null $string
     * @return string
     */
    public function decrypt(string|int|float|null $string): string
    {
        $str = (string)($string ?? '');

        /*
        // Legacy custom byte-shifting algorithm (preserved for reference, converted to PHP 8.4 syntax):
        $keys = $this->keys;
        if (!empty($keys)) {
            for ($i = 0; $i < strlen($str); $i++) {
                $id = $i % count($keys);
                $ord = ord($str[$i]);
                $ord = $ord ^ ord($keys[$id]);
                $id++;
                $ord = $ord & ord($keys[$id]);
                $id++;
                $ord = $ord | ord($keys[$id]);
                $id++;
                $ord = $ord - ord($keys[$id]);
                $str[$i] = chr($ord);
            }
        }
        */

        return (string) base64_decode($str);
    }
}