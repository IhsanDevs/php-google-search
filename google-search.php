<?php 

namespace IhsanDevs;

class GoogleSearch {
    protected static ?string $query;
    protected static ?string $language;
    protected static ?int $total_results;
    
    /**
     * @param string $query
     * @param string $language
     * @param int $total_results
     *
     * @return void
     *
     */
    public function __construct(string $query, string $language = 'en', int $total_results = 10)
    {
        self::$query = $query;
        self::$total_results = $total_results;
        self::$language = $language;

        if ($total_results < 1) {
            throw new \Exception('Total results must be greater than 0', 1);
            
        }
    }

    /**
     * @return array
     * 
     * Will return an array of results
     */
    public function search(): array
    {
        $query = self::$query;
        $language = self::$language;
        $total_results = self::$total_results;
        /**
         * Google Search using binary google-search
         * executable file
         *
         */
        $google_search = shell_exec("./dist/google-search '$query' -l '$language' -n $total_results --json");
        $google_search = json_decode($google_search, true);

        return $google_search;
    }
}