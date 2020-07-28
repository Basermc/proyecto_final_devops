<?php 
use PHPUnit\Framework\TestCase; 
  
class DirectoryandFilesExists extends TestCase 
{ 
    public function testPositiveTestcaseForAssertDirectoryExists() 
    { 
        $directoryPath = "code/public"; 
  
        // Assert function to test whether given 
        // directory path exists or not 
        $this->assertDirectoryExists( 
            $directoryPath, 
            "directoryPath exists"
        ); 
    } 
    
    public function testPositiveTestcaseForAssertFileExists() 
    { 
        $FilePath = "code/public/index.php"; 
  
        // Assert function to test whether given 
        // directory path exists or not 
        $this->assertFileExists( 
            $FilePath, 
            "FilePath exists"
        ); 
    } 
} 
  
?> 