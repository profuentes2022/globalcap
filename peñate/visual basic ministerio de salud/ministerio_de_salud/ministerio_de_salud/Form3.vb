Imports MySql.Data.MySqlClient
Public Class Form3



    Private Sub Form3_Load(sender As Object, e As EventArgs) Handles MyBase.Load
        Form1.TextBox1.Text = TextBox1.Text
    End Sub

    Private Sub Button1_Click(sender As Object, e As EventArgs) Handles Button1.Click

        Dim con As MySqlConnection
        Dim comando As MySqlCommand
        Dim url As String
        Dim sql As String

        url = "Server=localhost;User=root;Pwd=;Database=ministerio_de_salud"
        con = New MySqlConnection(url)
        con.Open()
        sql = "INSERT INTO medicos(nombre, nit, edad, antecedentes, especialidad) VALUES('" & Me.TextBox1.Text & "','" & Me.TextBox2.Text & "','" & Me.TextBox4.Text & "','" & Me.TextBox3.Text & "','" & Me.TextBox6.Text & "')"


       


        comando = New MySqlCommand(sql, con)
        comando.ExecuteNonQuery()

        MsgBox("Los datos se guardaron correctamente")
        con.Close()

        Me.TextBox1.Text = ""
        Me.TextBox2.Text = ""
        Me.TextBox3.Text = ""
        Me.TextBox4.Text = ""
        Me.TextBox6.Text = ""



    End Sub

    Private Sub TextBox6_TextChanged(sender As Object, e As EventArgs) Handles TextBox6.TextChanged

    End Sub
End Class