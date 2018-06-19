<?php
namespace App\Libs;
use Tecactus\Reniec\DNI;

class ReniecApi 
{
    protected $dni;

    function __construct() {
        $this->dni = new Dni('eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjhkYjM2NzdiZWZjNjRlMGM3NDQ0ZGRmNjU2YjQxNjljODQxNzQzYWY5YmNkZjlkZDA0N2Q0M2ViNzM4MmQ5NDkwYzViOWFiZTJlMDgzODU2In0.eyJhdWQiOiIxIiwianRpIjoiOGRiMzY3N2JlZmM2NGUwYzc0NDRkZGY2NTZiNDE2OWM4NDE3NDNhZjliY2RmOWRkMDQ3ZDQzZWI3MzgyZDk0OTBjNWI5YWJlMmUwODM4NTYiLCJpYXQiOjE1MjkzODAxNDUsIm5iZiI6MTUyOTM4MDE0NSwiZXhwIjoxNTYwOTE2MTQ1LCJzdWIiOiIxOTk1Iiwic2NvcGVzIjpbInVzZS1yZW5pZWMiXX0.eX23JV3lm1-ngFkCXJtlNAZ-dKlZeBszEegsQ--0XNl5bVUuY83YeuaXN3C0IjrbuYSkGZoo2T3jfzs1YxCn4eb9DjGJGFFsJsCteIsUV5HQLIJMIDy_7GVBHXodsYbI5EC00GcwXxdlsnPUfjQglYyGedrbfnvOH4FcSVN7sjZYhSLj0u3gnCOWu15lABQi8c0M6yU0nwUT0inqEAVaWuLHwSUGes3ix7vLyo9VGMDPeWr_e8iAIolDaalzaAgcfF9onF1VmPmxkk-ogV9jXxf_kkPuJl1Ply-qHHz2f2kRF_9Qxnf_4rVNYX-nNqG3j0UtZKjQdKkcfBOp9KzlDkVty_EssugccW4KKCO8Jddq9i1a8X8UKe7QO0azQ0RMA7kOn3OuWJ3A932XnqQlrSSRB_3D7DwA65nOesB9kYPeMWPyrpO4P-D9UAxDYVuKvqfOY8DviX0-RamYpU6ionSIeaZXQciXEOA9kwVkn9VtX3XpqcrB6mpJJe0YaMnrXhm8ftVNKCVDaXKH3V_Cxk7OW5Ec2mlMUNvxt-_YKLTriTberDyGC0OzH-9ClCQTQIR1Chcv-TNG8PpSYYrElAciWjIU4awNGh-J-tw0jn2eGFONPR46ckvomYqvYlZDZWNugkoAd52_uKhbmpype6VNFL32Ff8XrJupVifdtLo');
    }

    public function buscarDni($numero)
    {
        # code...
        return $this->dni->get($numero, true);
    }
}
?>