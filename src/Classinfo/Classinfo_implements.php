<?php
namespace xltxlm\classinfo\Classinfo;

/**
 * 获取类的基本信息;
*/
abstract class Classinfo_implements
{



    /* @var string 类的全路径 */
        protected $Full_Class_Name = '';
    
    /**
     * @return string;
     */
    public function getFull_Class_Name():string    {
        return $this->Full_Class_Name;
    }

    /**
     * @param string $Full_Class_Name;
     * @return $this
     */
    public function setFull_Class_Name(string $Full_Class_Name)
    {
        $this->Full_Class_Name = $Full_Class_Name;
        return $this;
    }

    /* @var string 类的名称,不带命名空间 */
        protected $Name_no_Namespace = '';
    
    /**
     * @return string;
     */
    public function getName_no_Namespace():string    {
        return $this->Name_no_Namespace;
    }

    /**
     * @param string $Name_no_Namespace;
     * @return $this
     */
    protected function setName_no_Namespace(string $Name_no_Namespace)
    {
        $this->Name_no_Namespace = $Name_no_Namespace;
        return $this;
    }

    /* @var string 获取类的命名空间 */
        protected $Namespace = '';
    
    /**
     * @return string;
     */
    public function getNamespace():string    {
        return $this->Namespace;
    }

    /**
     * @param string $Namespace;
     * @return $this
     */
    protected function setNamespace(string $Namespace)
    {
        $this->Namespace = $Namespace;
        return $this;
    }

}