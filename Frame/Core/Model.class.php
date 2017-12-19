<?php

//基础模型类
class Model {
    private $pdo;

    //构造方法，作用是获取Db中的pdo
    public function __construct()
    {
        $db = Db::getIns();
        $this->pdo = $db->pdo;
    }

    //查询的方法，查询所有行的方法
    public function select($sql, $params = array())
    {
        try {
            //查询。。。。
            $stmt = $this->pdo->prepare($sql); //预处理，得到PDOStatement对象
            //如果sql中有占位符(?:)，就给它绑定值
            if ($params) {
                $this->bindValue($params, $stmt);
            }
            $stmt->execute();
            //取出数据
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        } catch (PDOException $e) {
            $this->err($e);
        }
    }

    //完成一个添加数据的方法
    public function add($sql, $params = array())
    {
        try {
            $stmt = $this->pdo->prepare($sql);
            if ($params) {
                $this->bindValue($params, $stmt);
            }
            if ($stmt->execute()) {
                return $this->pdo->lastInsertId(); //添加成功返回最新添加的id
            } else {
                return false;
            }
        } catch (PDOException $e) {
            $this->err($e);
        }
    }

    //完成一个添加数据的方法
    public function delete($sql, $params = array())
    {
        try {
            $stmt = $this->pdo->prepare($sql);
            if ($params) {
                $this->bindValue($params, $stmt);
            }
            if ($stmt->execute()) {
                return $stmt->rowCount(); //删除成功返回受影响的行数
            } else {
                return false;
            }
        } catch (PDOException $e) {
            $this->err($e);
        }
    }

    //修改方法save
    public function save($sql, $params = array())
    {
        try {
            $stmt = $this->pdo->prepare($sql);
            if ($params) {
                $this->bindValue($params, $stmt);
            }
            if ($stmt->execute()) {
                return $stmt->rowCount(); //修改成功返回受影响的行数
            } else {
                return false;
            }
        } catch (PDOException $e) {
            $this->err($e);
        }
    }

    //查询一行方法find
    public function find($sql, $params = array())
    {
        try {
            //查询。。。。
            $stmt = $this->pdo->prepare($sql); //预处理，得到PDOStatement对象
            //如果sql中有占位符(?:)，就给它绑定值
            if ($params) {
                $this->bindValue($params, $stmt);
            }
            $stmt->execute();
            //取出数据
            $data = $stmt->fetch(PDO::FETCH_ASSOC);
            return $data;
        } catch (PDOException $e) {
            $this->err($e);
        }
    }
    //查询总记录数方法count
    //需要的SQL，必须是select count(*) from table where ....这种形式
    public function count($sql, $params = array())
    {
        try {
            //查询。。。。
            $stmt = $this->pdo->prepare($sql); //预处理，得到PDOStatement对象
            //如果sql中有占位符(?:)，就给它绑定值
            if ($params) {
                $this->bindValue($params, $stmt);
            }
            $stmt->execute();
            $data = $stmt->fetchColumn(); //返回一行一列，也就是总数
            return $data;
        } catch (PDOException $e) {
            $this->err($e);
        }
    }

    //提取给占位符绑定值的代码
    private function bindValue($params, $stmt)
    {
        foreach ($params as $key => $val) {
            if (is_int($key)) {
                $stmt->bindValue($key + 1, $val);
            } else {
                $stmt->bindValue(':' . $key, $val);
            }
        }
    }

    //提取异常提示信息
    private function err($e)
    {
        $err = '';
        $err .= "错误文件：" . $e->getFile() . '<br>';
        $err .= "错 误 行：" . $e->getLine() . '<br>';
        $err .= "错误描述：" . $e->getMessage();
        exit($err);
    }
}

?>