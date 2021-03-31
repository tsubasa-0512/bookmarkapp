import React, { useState } from 'react';
import "./styles.css";

export const App = () => {
  const [bookText,setBookText] = useState('');
  const [ unreadBooks, setUnreadBooks] = useState(["起業の科学", "おいしんぼ"]);
  const [readBooks, setReadBooks] = useState(["生命科学的思考"]);
  
  const onChangebookText = (e) => setBookText(e.target.value)

  const onCLickAddBook = () => {
    if(bookText === "") return;
    const newreadBooks = [...unreadBooks, bookText]; 
    setUnreadBooks(newreadBooks);
    setBookText('');
  }

  return (
    <>
      <div className="formLayout">
          <input placeholder="読む本を入力してください" value={bookText} onChange={onChangebookText}/>
          <button onClick={onCLickAddBook}>追加</button>
      </div>
      <div className="unreadBooks">
        <p className="title">未読本一覧</p>
        <ul>
          {unreadBooks.map((book, index) => {
            return (
            <div key={book} className="list-row">
            <li>{book}</li>
            <button>読了</button>
            <button>積読</button>
            </div>
          );
          })}
        </ul>
      </div>
      <div className="readBooks">
      <p className="title">読破本一覧</p>
        <ul>
          {readBooks.map((book, index)=> {
            return (
              <div className="list-row">
                <li>{book}</li>
                <button>再読</button>
              </div>
            );
          })}
        </ul>
      </div>
  </>
  );
};
