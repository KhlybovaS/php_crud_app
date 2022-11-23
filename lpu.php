<?php
function getLpu()
{
   return json_decode(file_get_contents(__DIR__.'/lpu.json'), true);
}

function getLpuById($id)
{
    $lpus = getLpu();
    foreach ($lpus as $lpu){
        if ($lpu['id'] == $id)
        return $lpu;
    }
    return null;
}

function createLpu($data)
{
    $lpus = getLpu();
    $data['id'] = rand(100000, 2000000);
    $lpus[] = $data;
    file_put_contents(__DIR__.'/lpu.json', json_encode($lpus, JSON_PRETTY_PRINT));
    return $data;
}

function updateLpu($data, $id)
{
    $lpus = getLpu();
    foreach ($lpus as $i => $lpu){
        if ($lpu['id'] == $id){
            $lpus[$i] = array_merge($lpu, $data);
        }
    }
    
    file_put_contents(__DIR__.'/lpu.json', json_encode($lpus, JSON_PRETTY_PRINT));
}

function deleteLpu($id)
{
    $lpus = getLpu();
    foreach ($lpus as $i => $lpu){
        if ($lpu['id'] == $id){
            array_splice($lpus, $i, 1);
        }
    }
    
    file_put_contents(__DIR__.'/lpu.json', json_encode($lpus, JSON_PRETTY_PRINT));   
}
?>